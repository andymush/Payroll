import "vuetify/styles";
import { createVuetify } from "vuetify";
import * as components from "vuetify/components";
import * as directives from "vuetify/directives";
import '@mdi/font/css/materialdesignicons.css' // Ensure you are using css-loader
import {BLUE_THEME, AQUA_THEME, PURPLE_THEME, GREEN_THEME, CYAN_THEME, ORANGE_THEME} from '@/theme/LightTheme';

const customeTheme = {
    dark: false,
    colors: {
        primary: "#673AB7",
        secondary: "#424242",
        accent: "#82B1FF",
        error: "#FF5252",
        info: "#2196F3",
        success: "#4CAF50",
        warning: "#FFC107",
        lightblue: "#14c6FF",
        yellow: "#FFCF00",
        pink: "#FF1976",
        orange: "#FF8657",
        magenta: "#C33AFC",
        darkblue: "#1E2D56",
        gray: "#909090",
        neutralgray: "#9BA6C1",
        green: "#2ED47A",
        red: "#FF5c4E",
        darkblueshade: "#308DC2",
        lightgray: "#BDBDBD",
        lightpink: "#FFCFE3",
        white: "#FFFFFF",
        muted: "#6c757d",
    },
};

const vuetify = createVuetify({
    components,
    directives,
    theme: {
        defaultTheme: "customeTheme",
        themes: {
            customeTheme,
            BLUE_THEME,
        },
    },
});

export default vuetify;








// import {createVuetify} from 'vuetify'
// // import 'vuetify/styles'
// import * as components from 'vuetify/components'
// import * as directives from 'vuetify/directives';
// import '@mdi/font/css/materialdesignicons.css' // Ensure you are using css-loader

// //import {VueDraggableNext} from 'vue-draggable-next'
// import {BLUE_THEME, AQUA_THEME, PURPLE_THEME, GREEN_THEME, CYAN_THEME, ORANGE_THEME} from '@/theme/LightTheme';
// import {
//     DARK_BLUE_THEME,
//     DARK_AQUA_THEME,
//     DARK_ORANGE_THEME,
//     DARK_PURPLE_THEME,
//     DARK_GREEN_THEME,
//     DARK_CYAN_THEME
// } from '@/theme/DarkTheme';

// export default createVuetify({
//     // components, // default vuetify component
//     components: {
//         ...components,
//        // draggable: VueDraggableNext,
//     },
//     directives,

//     theme: {
//         defaultTheme: 'BLUE_THEME',
//         themes: {
//             BLUE_THEME,
//             AQUA_THEME,
//             PURPLE_THEME,
//             GREEN_THEME,
//             CYAN_THEME,
//             ORANGE_THEME,
//             DARK_BLUE_THEME,
//             DARK_AQUA_THEME,
//             DARK_ORANGE_THEME,
//             DARK_PURPLE_THEME,
//             DARK_GREEN_THEME,
//             DARK_CYAN_THEME
//         }
//     },
//     defaults: {
//         VCard: {
//             rounded: 'md'
//         },
//         VTextField: {
//             variant: 'outlined',
//             density: 'compact',
//             color: 'primary',
//         },
//         VTextarea: {
//             variant: 'outlined',
//             density: 'comfortable',
//             color: 'primary'
//         },
//         VSelect: {
//             variant: 'outlined',
//             density: 'comfortable',
//             color: 'primary'
//         },
//         VListItem: {
//             minHeight: '45px'
//         },
//         VTooltip: {
//             location: 'top'
//         },
//     },
// })
