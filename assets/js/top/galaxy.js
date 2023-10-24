const planet = $(".planet");
const galaxy = $(".galaxy");

const ConvertDegToRad = (e) => {
    return (e * Math.PI) / 180;
};

const config = {
    fps: 60,
    time_stop_for_active: 2500,

    globalInit: null,

    galaxy_line: {
        x: 0,
        y: 0,
        width: 655,
        height: 320,

        speed: 0.01,

        point_bigest: 106,
        point_active_min: -250,
        point_active_max: -340,

        angle: 40,
        scale: 1,

        break_point: {
            pc: {
                width: 655,
                height: 300,
                angle: 42,
                point_bigest: 106,
                point_active_min: -250,
                point_active_max: -340,
            },
            sp: {
                width: 280,
                height: 130,
                angle: 0,
                point_bigest: 60,
                point_active_min: -230,
                point_active_max: -314,
            },
        },
    },

    planet_position: [
        {
            x: -20,
            y: -20,
        },
        {
            x: -110,
            y: -110,
        },
        {
            x: -200,
            y: -200,
        },
        {
            x: -290,
            y: -290,
        },
    ],
};

const Init = () => {
    config.globalInit = setInterval(function () {
        Update();
    }, config.fps);
};

const PlanetStopForActive = (e) => {
    planet.eq(e).addClass("actived");
    // clearInterval(config.globalInit);

    // setTimeout(function () {
    //     planet.removeClass("actived");
    //     Init();
    // }, config.time_stop_for_active);
};

const GalaxyScale = () => {
    const baseScreen = 1600;
    const screen2 = 768;
    const { innerWidth } = window;

    let _scale = 1;
    if (innerWidth < baseScreen && innerWidth >= screen2) {
        _scale = innerWidth / baseScreen;
    }
    if (innerWidth < screen2) {
        _scale = innerWidth / (screen2 - 1);
    }
    galaxy.css({
        transform: `scale(${_scale})`,
    });

    if (innerWidth < screen2) {
        const { break_point } = config.galaxy_line;

        config.galaxy_line.width = break_point.sp.width;
        config.galaxy_line.height = break_point.sp.height;
        config.galaxy_line.angle = break_point.sp.angle;
        config.galaxy_line.point_active_min = break_point.sp.point_active_min;
        config.galaxy_line.point_active_max = break_point.sp.point_active_max;
    } else {
        const { break_point } = config.galaxy_line;
        config.galaxy_line.width = break_point.pc.width;
        config.galaxy_line.height = break_point.pc.height;
        config.galaxy_line.angle = break_point.pc.angle;
        config.galaxy_line.point_active_min = break_point.pc.point_active_min;
        config.galaxy_line.point_active_max = break_point.pc.point_active_max;
    }
};

const Update = (step = 1) => {
    const { galaxy_line, planet_position } = config;
    planet.map((a, b) => {
        const _ = $(b);
        const {
            x,
            y,
            width,
            height,
            speed,
            angle,
            point_bigest,
            point_active_min,
            point_active_max,
        } = galaxy_line;

        planet_position[a].x -= step;
        planet_position[a].x < -360 ? (planet_position[a].x += 360) : null;
        planet_position[a].y -= step;
        planet_position[a].y < -360 ? (planet_position[a].y += 360) : null;

        const { x: deg_x, y: deg_y } = planet_position[a];

        let p = ConvertDegToRad(deg_x),
            f = ConvertDegToRad(deg_y - angle),
            _x = x + Math.cos(p) * width, // center x - pos w
            _y = y + Math.sin(f) * height, // center y - pos h
            v = Math.abs((deg_x + point_bigest) % 360),
            _min_scale = 0.14,
            _max_scale = 10;

        //*! -> keep v from 180 -> 360
        180 < v && (v = 360 - v);

        let _scale = _min_scale + 0.006 * v;
        _scale > _max_scale ? (_scale = _max_scale) : _scale;
        if (deg_x <= point_active_min && deg_x >= point_active_max) {
            // _.css({
            //     transform: `translate3d(${_x}px, ${_y}px, 0) scale(1)`,
            //     zIndex: `${-deg_y | 0}`,
            // });
            // PlanetStopForActive(a);
            planet.eq(a).addClass("actived");
        } else {
            const tar = planet.eq(a);
            if (tar.hasClass("actived")) {
                tar.removeClass("actived");
                tar.addClass("after_actived");
                setTimeout(function () {
                    tar.removeClass("after_actived");
                }, 500);
            }
        }
        _.css({
            transform: `translate3d(${_x}px, ${_y}px, 0) scale(${_scale})`,
            zIndex: `${(_scale * 10) | 0}`,
        });

        // _.text(`${_scale}`);
    });
};

$(window).on("load", function () {
    GalaxyScale();
    Init();
});

$(window).on("resize", function () {
    GalaxyScale();
});

$(window).on("scroll", function () {});
