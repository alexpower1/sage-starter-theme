module.exports = {
    purge: {
        enabled: false,
        content: ["../../**/*.blade.php", "../../**/*.php"],
    },
    theme: {
        extend: {
            colors: {
                "ffa-blue": "#34368e",
                "ffa-dark": "#1d1e50",
            },
            fontFamily: {
                inter: ["Inter", "Arial", "ans-serif"],
            },
        },
        container: {
            center: true,
            padding: "2rem",
        },
    },
};
