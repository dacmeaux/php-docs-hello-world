!(($) => {
    const date = new Date();

    const WPUtils = () => {
        let debug = false;

        return {
            setDebug: (show) => {
                debug = show;
            },
            // Used normal function - arrow functions do not have an arguments object
            log: function() {
                if( debug && console && console.log ) {
                    console.log(`${date.getMonth()+1}-${date.getDay()}-${date.getFullYear()} ${date.getHours()}:${date.getMinutes()}`, ...arguments);
                }
            },

            makeObject: (proto, props = {}) => {
                return Object.create(proto, props);
            }
        }
    }

    const myUtils = new WPUtils();
    myUtils.setDebug(true);
    myUtils.log('Duane', $('body'));
})(jQuery);
