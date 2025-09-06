<!DOCTYPE html>
<html lang="zxx" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <title>Digital Invoica</title>
        <link href="assets/images/favicon/icon.png" rel="icon" />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
            rel="stylesheet"
        />

        <style>
            /* cyrillic-ext */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 100;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa2JL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF,
                    U+A640-A69F, U+FE2E-FE2F;
            }
            /* cyrillic */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 100;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa0ZL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1,
                    U+2116;
            }
            /* greek-ext */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 100;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa2ZL7SUc.woff2)
                    format("woff2");
                unicode-range: U+1F00-1FFF;
            }
            /* greek */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 100;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1pL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C,
                    U+038E-03A1, U+03A3-03FF;
            }
            /* vietnamese */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 100;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa2pL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0102-0103, U+0110-0111, U+0128-0129,
                    U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301,
                    U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9,
                    U+20AB;
            }
            /* latin-ext */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 100;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa25L7SUc.woff2)
                    format("woff2");
                unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC,
                    U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329,
                    U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB,
                    U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 100;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1ZL7.woff2)
                    format("woff2");
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC,
                    U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F,
                    U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF,
                    U+FFFD;
            }
            /* cyrillic-ext */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 200;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa2JL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF,
                    U+A640-A69F, U+FE2E-FE2F;
            }
            /* cyrillic */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 200;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa0ZL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1,
                    U+2116;
            }
            /* greek-ext */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 200;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa2ZL7SUc.woff2)
                    format("woff2");
                unicode-range: U+1F00-1FFF;
            }
            /* greek */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 200;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1pL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C,
                    U+038E-03A1, U+03A3-03FF;
            }
            /* vietnamese */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 200;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa2pL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0102-0103, U+0110-0111, U+0128-0129,
                    U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301,
                    U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9,
                    U+20AB;
            }
            /* latin-ext */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 200;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa25L7SUc.woff2)
                    format("woff2");
                unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC,
                    U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329,
                    U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB,
                    U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 200;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1ZL7.woff2)
                    format("woff2");
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC,
                    U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F,
                    U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF,
                    U+FFFD;
            }
            /* cyrillic-ext */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 300;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa2JL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF,
                    U+A640-A69F, U+FE2E-FE2F;
            }
            /* cyrillic */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 300;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa0ZL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1,
                    U+2116;
            }
            /* greek-ext */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 300;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa2ZL7SUc.woff2)
                    format("woff2");
                unicode-range: U+1F00-1FFF;
            }
            /* greek */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 300;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1pL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C,
                    U+038E-03A1, U+03A3-03FF;
            }
            /* vietnamese */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 300;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa2pL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0102-0103, U+0110-0111, U+0128-0129,
                    U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301,
                    U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9,
                    U+20AB;
            }
            /* latin-ext */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 300;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa25L7SUc.woff2)
                    format("woff2");
                unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC,
                    U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329,
                    U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB,
                    U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 300;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1ZL7.woff2)
                    format("woff2");
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC,
                    U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F,
                    U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF,
                    U+FFFD;
            }
            /* cyrillic-ext */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 400;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa2JL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF,
                    U+A640-A69F, U+FE2E-FE2F;
            }
            /* cyrillic */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 400;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa0ZL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1,
                    U+2116;
            }
            /* greek-ext */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 400;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa2ZL7SUc.woff2)
                    format("woff2");
                unicode-range: U+1F00-1FFF;
            }
            /* greek */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 400;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1pL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C,
                    U+038E-03A1, U+03A3-03FF;
            }
            /* vietnamese */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 400;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa2pL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0102-0103, U+0110-0111, U+0128-0129,
                    U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301,
                    U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9,
                    U+20AB;
            }
            /* latin-ext */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 400;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa25L7SUc.woff2)
                    format("woff2");
                unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC,
                    U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329,
                    U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB,
                    U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 400;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1ZL7.woff2)
                    format("woff2");
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC,
                    U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F,
                    U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF,
                    U+FFFD;
            }
            /* cyrillic-ext */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 500;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa2JL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF,
                    U+A640-A69F, U+FE2E-FE2F;
            }
            /* cyrillic */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 500;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa0ZL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1,
                    U+2116;
            }
            /* greek-ext */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 500;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa2ZL7SUc.woff2)
                    format("woff2");
                unicode-range: U+1F00-1FFF;
            }
            /* greek */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 500;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1pL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C,
                    U+038E-03A1, U+03A3-03FF;
            }
            /* vietnamese */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 500;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa2pL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0102-0103, U+0110-0111, U+0128-0129,
                    U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301,
                    U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9,
                    U+20AB;
            }
            /* latin-ext */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 500;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa25L7SUc.woff2)
                    format("woff2");
                unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC,
                    U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329,
                    U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB,
                    U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 500;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1ZL7.woff2)
                    format("woff2");
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC,
                    U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F,
                    U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF,
                    U+FFFD;
            }
            /* cyrillic-ext */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 600;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa2JL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF,
                    U+A640-A69F, U+FE2E-FE2F;
            }
            /* cyrillic */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 600;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa0ZL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1,
                    U+2116;
            }
            /* greek-ext */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 600;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa2ZL7SUc.woff2)
                    format("woff2");
                unicode-range: U+1F00-1FFF;
            }
            /* greek */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 600;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1pL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C,
                    U+038E-03A1, U+03A3-03FF;
            }
            /* vietnamese */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 600;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa2pL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0102-0103, U+0110-0111, U+0128-0129,
                    U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301,
                    U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9,
                    U+20AB;
            }
            /* latin-ext */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 600;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa25L7SUc.woff2)
                    format("woff2");
                unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC,
                    U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329,
                    U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB,
                    U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 600;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1ZL7.woff2)
                    format("woff2");
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC,
                    U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F,
                    U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF,
                    U+FFFD;
            }
            /* cyrillic-ext */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 700;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa2JL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF,
                    U+A640-A69F, U+FE2E-FE2F;
            }
            /* cyrillic */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 700;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa0ZL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1,
                    U+2116;
            }
            /* greek-ext */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 700;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa2ZL7SUc.woff2)
                    format("woff2");
                unicode-range: U+1F00-1FFF;
            }
            /* greek */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 700;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1pL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C,
                    U+038E-03A1, U+03A3-03FF;
            }
            /* vietnamese */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 700;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa2pL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0102-0103, U+0110-0111, U+0128-0129,
                    U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301,
                    U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9,
                    U+20AB;
            }
            /* latin-ext */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 700;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa25L7SUc.woff2)
                    format("woff2");
                unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC,
                    U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329,
                    U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB,
                    U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 700;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1ZL7.woff2)
                    format("woff2");
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC,
                    U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F,
                    U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF,
                    U+FFFD;
            }
            /* cyrillic-ext */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 800;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa2JL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF,
                    U+A640-A69F, U+FE2E-FE2F;
            }
            /* cyrillic */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 800;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa0ZL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1,
                    U+2116;
            }
            /* greek-ext */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 800;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa2ZL7SUc.woff2)
                    format("woff2");
                unicode-range: U+1F00-1FFF;
            }
            /* greek */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 800;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1pL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C,
                    U+038E-03A1, U+03A3-03FF;
            }
            /* vietnamese */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 800;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa2pL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0102-0103, U+0110-0111, U+0128-0129,
                    U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301,
                    U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9,
                    U+20AB;
            }
            /* latin-ext */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 800;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa25L7SUc.woff2)
                    format("woff2");
                unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC,
                    U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329,
                    U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB,
                    U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 800;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1ZL7.woff2)
                    format("woff2");
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC,
                    U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F,
                    U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF,
                    U+FFFD;
            }
            /* cyrillic-ext */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 900;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa2JL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF,
                    U+A640-A69F, U+FE2E-FE2F;
            }
            /* cyrillic */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 900;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa0ZL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1,
                    U+2116;
            }
            /* greek-ext */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 900;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa2ZL7SUc.woff2)
                    format("woff2");
                unicode-range: U+1F00-1FFF;
            }
            /* greek */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 900;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1pL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C,
                    U+038E-03A1, U+03A3-03FF;
            }
            /* vietnamese */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 900;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa2pL7SUc.woff2)
                    format("woff2");
                unicode-range: U+0102-0103, U+0110-0111, U+0128-0129,
                    U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301,
                    U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9,
                    U+20AB;
            }
            /* latin-ext */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 900;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa25L7SUc.woff2)
                    format("woff2");
                unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC,
                    U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329,
                    U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB,
                    U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
                font-family: "Inter";
                font-style: normal;
                font-weight: 900;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/inter/v19/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1ZL7.woff2)
                    format("woff2");
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC,
                    U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F,
                    U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF,
                    U+FFFD;
            }
            /* latin-ext */
            @font-face {
                font-family: "Lato";
                font-style: italic;
                font-weight: 100;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/lato/v24/S6u-w4BMUTPHjxsIPx-mPCLQ7A.woff2)
                    format("woff2");
                unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC,
                    U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329,
                    U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB,
                    U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
                font-family: "Lato";
                font-style: italic;
                font-weight: 100;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/lato/v24/S6u-w4BMUTPHjxsIPx-oPCI.woff2)
                    format("woff2");
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC,
                    U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F,
                    U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF,
                    U+FFFD;
            }
            /* latin-ext */
            @font-face {
                font-family: "Lato";
                font-style: italic;
                font-weight: 300;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/lato/v24/S6u_w4BMUTPHjxsI9w2_FQft1dw.woff2)
                    format("woff2");
                unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC,
                    U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329,
                    U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB,
                    U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
                font-family: "Lato";
                font-style: italic;
                font-weight: 300;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/lato/v24/S6u_w4BMUTPHjxsI9w2_Gwft.woff2)
                    format("woff2");
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC,
                    U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F,
                    U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF,
                    U+FFFD;
            }
            /* latin-ext */
            @font-face {
                font-family: "Lato";
                font-style: italic;
                font-weight: 400;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/lato/v24/S6u8w4BMUTPHjxsAUi-qJCY.woff2)
                    format("woff2");
                unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC,
                    U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329,
                    U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB,
                    U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
                font-family: "Lato";
                font-style: italic;
                font-weight: 400;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/lato/v24/S6u8w4BMUTPHjxsAXC-q.woff2)
                    format("woff2");
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC,
                    U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F,
                    U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF,
                    U+FFFD;
            }
            /* latin-ext */
            @font-face {
                font-family: "Lato";
                font-style: italic;
                font-weight: 700;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/lato/v24/S6u_w4BMUTPHjxsI5wq_FQft1dw.woff2)
                    format("woff2");
                unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC,
                    U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329,
                    U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB,
                    U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
                font-family: "Lato";
                font-style: italic;
                font-weight: 700;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/lato/v24/S6u_w4BMUTPHjxsI5wq_Gwft.woff2)
                    format("woff2");
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC,
                    U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F,
                    U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF,
                    U+FFFD;
            }
            /* latin-ext */
            @font-face {
                font-family: "Lato";
                font-style: italic;
                font-weight: 900;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/lato/v24/S6u_w4BMUTPHjxsI3wi_FQft1dw.woff2)
                    format("woff2");
                unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC,
                    U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329,
                    U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB,
                    U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
                font-family: "Lato";
                font-style: italic;
                font-weight: 900;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/lato/v24/S6u_w4BMUTPHjxsI3wi_Gwft.woff2)
                    format("woff2");
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC,
                    U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F,
                    U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF,
                    U+FFFD;
            }
            /* latin-ext */
            @font-face {
                font-family: "Lato";
                font-style: normal;
                font-weight: 100;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/lato/v24/S6u8w4BMUTPHh30AUi-qJCY.woff2)
                    format("woff2");
                unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC,
                    U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329,
                    U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB,
                    U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
                font-family: "Lato";
                font-style: normal;
                font-weight: 100;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/lato/v24/S6u8w4BMUTPHh30AXC-q.woff2)
                    format("woff2");
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC,
                    U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F,
                    U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF,
                    U+FFFD;
            }
            /* latin-ext */
            @font-face {
                font-family: "Lato";
                font-style: normal;
                font-weight: 300;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/lato/v24/S6u9w4BMUTPHh7USSwaPGR_p.woff2)
                    format("woff2");
                unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC,
                    U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329,
                    U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB,
                    U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
                font-family: "Lato";
                font-style: normal;
                font-weight: 300;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/lato/v24/S6u9w4BMUTPHh7USSwiPGQ.woff2)
                    format("woff2");
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC,
                    U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F,
                    U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF,
                    U+FFFD;
            }
            /* latin-ext */
            @font-face {
                font-family: "Lato";
                font-style: normal;
                font-weight: 400;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/lato/v24/S6uyw4BMUTPHjxAwXjeu.woff2)
                    format("woff2");
                unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC,
                    U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329,
                    U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB,
                    U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
                font-family: "Lato";
                font-style: normal;
                font-weight: 400;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/lato/v24/S6uyw4BMUTPHjx4wXg.woff2)
                    format("woff2");
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC,
                    U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F,
                    U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF,
                    U+FFFD;
            }
            /* latin-ext */
            @font-face {
                font-family: "Lato";
                font-style: normal;
                font-weight: 700;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/lato/v24/S6u9w4BMUTPHh6UVSwaPGR_p.woff2)
                    format("woff2");
                unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC,
                    U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329,
                    U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB,
                    U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
                font-family: "Lato";
                font-style: normal;
                font-weight: 700;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/lato/v24/S6u9w4BMUTPHh6UVSwiPGQ.woff2)
                    format("woff2");
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC,
                    U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F,
                    U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF,
                    U+FFFD;
            }
            /* latin-ext */
            @font-face {
                font-family: "Lato";
                font-style: normal;
                font-weight: 900;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/lato/v24/S6u9w4BMUTPHh50XSwaPGR_p.woff2)
                    format("woff2");
                unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC,
                    U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329,
                    U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB,
                    U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
                font-family: "Lato";
                font-style: normal;
                font-weight: 900;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/lato/v24/S6u9w4BMUTPHh50XSwiPGQ.woff2)
                    format("woff2");
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC,
                    U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F,
                    U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF,
                    U+FFFD;
            }
        </style>

        <style>
            html {
                scroll-behavior: smooth;
                -webkit-text-size-adjust: 100%;
            }
            body {
                background: #f8f9fd;
                width: auto;
                height: 100%;
                color: #ffffff;
                font-family: "Inter", sans-serif;
                margin: 0;
            }
            body {
                margin: 0;
                padding: 0;
            }
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            p {
                margin: 0;
                padding: 0;
            }
            *,
            ::after,
            ::before {
                box-sizing: border-box;
            }
            a:focus,
            a {
                outline: none;
                text-decoration: none;
                cursor: pointer;
            }
            .bg-black {
                background: #12151c;
            }
            .bg-red {
                background: #ef4444;
            }
            .bg-green {
                background: #00d061;
            }
            .bg-yellow {
                background: #f59e0b;
            }
            .font-sm {
                color: #505050;
                font-family: Inter;
                font-size: 14px;
                font-style: normal;
                font-weight: 400;
                line-height: 22px;
            }
            .font-sm-700 {
                font-family: Inter;
                font-size: 14px;
                font-style: normal;
                font-weight: 700;
                line-height: 22px;
            }
            .font-sm-500 {
                color: #505050;
                font-family: Inter;
                font-size: 14px;
                font-style: normal;
                font-weight: 500;
                line-height: 22px;
            }
            .font-md {
                font-family: Inter;
                font-size: 16px;
                font-style: normal;
                font-weight: 700;
                line-height: 24px;
            }
            .font-md-500 {
                color: #12151c;
                font-family: Inter;
                font-size: 16px;
                font-style: normal;
                font-weight: 500;
                line-height: 24px;
            }
            .font-md-grey {
                font-family: Inter;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: 24px;
            }
            .font-18 {
                color: #fff;
                font-family: Inter;
                font-size: 18px;
                font-style: normal;
                font-weight: 400;
                line-height: 24px;
            }
            .font-18-700 {
                font-family: Inter;
                font-size: 18px;
                font-style: normal;
                font-weight: 700;
                line-height: 24px;
            }
            .font-18-500 {
                font-family: Inter;
                font-size: 18px;
                font-style: normal;
                font-weight: 500;
                line-height: 24px;
            }
            .font-lg {
                font-family: Inter;
                font-size: 20px;
                font-style: normal;
                font-weight: 700;
                line-height: 24px;
            }
            .color-blue {
                color: #1d4ed8;
            }
            .bg-blue {
                background: #1d4ed8;
            }
            .bg-dark-green {
                background: #60a917;
            }
            .table-bg {
                background: #f5f5f5;
            }
            .color-green {
                color: #60a917;
            }
            .color-white {
                color: #fff;
            }
            .color-light-black {
                color: #12151c;
            }
            .color-grey {
                color: #505050;
            }
            .color-purple {
                color: #7e22ce;
            }
            .color-yellow {
                color: #f59e0b;
            }
            .color-dark-yellow {
                color: #ffa801;
            }
            .color-pink {
                color: #e11d48;
            }
            .color-dark-blue {
                color: #3742fa;
            }
            .pt-10 {
                padding-top: 10px;
            }
            .pt-40 {
                padding-top: 40px;
            }
            .mtb-14 {
                margin: 14px 0px !important;
            }
            .invo-to-wrap {
                text-align: left;
            }
            .invo-pay-to-wrap {
                text-align: right;
            }
            .pl-10 {
                padding-left: 10px !important;
            }
            .pr-10 {
                padding-right: 10px !important;
            }
            .pr-20 {
                padding-right: 20px;
            }
            .padding {
                padding: 10px;
            }
            .pt-20 {
                padding-top: 20px;
            }
            .pt-0 {
                padding-top: 0;
            }
            .text-right {
                text-align: right !important;
            }
            .text-center {
                text-align: center !important;
            }
            .text-left {
                text-align: left !important;
            }
            .invo-total-table .tax-row td {
                padding: 20px 0;
            }
            .hotel-sub {
                padding-left: 70px !important;
            }
            .width-50 {
                width: 50%;
            }
            .d-none {
                display: none;
            }

            /************************* 2.Header CSS **************************/
            .text-invoice {
                background-image: url("https://up2client.com/envato/digital-invoica/main-file/assets/images/hotel/txt-img.png");
                background-repeat: no-repeat;
                width: 100%;
                height: auto;
                top: auto;
                bottom: 0;
                left: 0;
                right: 0;
                background-size: auto;
                background-position: bottom center;
            }
            .container {
                max-width: 850px;
                margin: 0 auto;
                padding: 0 50px;
            }
            .invoice-content-wrap {
                background: white;
                position: relative;
                height: 100%;
                width: 100%;
            }
            .invoice-container {
                max-width: 880px;
                margin: 0 auto;
                padding: 30px 15px;
            }
            .wid-20 {
                width: 20%;
            }
            .wid-40 {
                text-align: start;
                width: 102px;
            }
            .wid-50 {
                width: 50%;
            }
            .logo img {
                display: block;
                height: 100%;
            }

            /************************* 2.Agency Invoice CSS **************************/
            .invoice-logo-content {
                display: flex;
                flex-wrap: nowrap;
                justify-content: space-between;
            }
            .invoi-date-wrap.invoi-date-wrap-agency {
                padding-bottom: 0;
            }
            .agency-logo {
                width: 230px;
                height: 150px;
                clip-path: polygon(0 1%, 100% 0%, 100% 67%, 0% 100%);
                background: #1d4ed8;
                position: absolute;
                top: 0;
                padding: 30px;
            }
            .invoice-owner-conte-wrap {
                display: flex;
                justify-content: space-between;
                -webkit-box-pack: justify;
            }
            .invoice-table {
                border-collapse: collapse;
                width: 100%;
                max-width: 750px;
                margin: 0 auto;
                white-space: nowrap;
            }
            .agency-service-table .invoice-table thead th {
                color: white;
                padding: 10px 0;
            }
            .serv-wid {
                width: 32%;
            }
            .desc-wid {
                width: 36%;
            }
            .qty-wid {
                width: 10%;
            }
            .pric-wid {
                width: 12%;
            }
            .tota-wid {
                width: 10%;
            }
            .invo-tb-body {
                border-bottom: 2px solid #12151c;
                border-top: 2px solid #12151c;
            }
            .invoice-table td {
                padding: 20px 0;
            }
            .invo-tb-body .invo-tb-row {
                border-bottom: 1px solid #505050;
            }
            .invo-addition-wrap {
                display: flex;
                justify-content: space-between;
            }
            .invo-add-info-content {
                width: 50%;
            }
            .invo-bill-total {
                width: 50%;
                position: relative;
            }
            .invo-bill-total table {
                width: 100%;
                border-collapse: collapse;
                white-space: nowrap;
                float: right;
            }
            .invoice-header-contact {
                justify-content: space-between;
                display: flex;
                align-items: center;
            }
            .invo-cont-wrap {
                display: flex;
                flex-wrap: nowrap;
                align-items: center;
            }
            .agency-contact-sec {
                padding: 15px 50px;
                margin-top: 40px;
            }
            .invo-social-name {
                padding-left: 10px;
            }
            .agency-bottom-content {
                background: #f8f9fd;
                border-radius: 0px 0px 20px 20px;
                padding: 30px 0 0;
            }
            .agency1 .agency-bottom-content,
            .hotel .agency-bottom-content {
                padding-bottom: 0px !important;
            }
            .invo-buttons-wrap {
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 26px;
                background: #fff;
                box-shadow: 0px 25px 20px -20px rgba(18, 21, 28, 0.25);
                width: fit-content;
                padding: 2px;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 15px;
            }
            .invo-btns {
                display: inline-flex;
                align-items: center;
                margin: 0 1px;
            }
            .invo-buttons-wrap .invo-btns .print-btn {
                background: #ef4444;
                padding: 12px 24px;
                /* border-radius: 24px 0px 0px 24px; */
                display: flex;
                align-items: center;
                color: white;
            }
            .invo-social-icon {
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .invo-buttons-wrap .invo-btns .download-btn {
                background: #00d061;
                padding: 12px 24px;
                border-radius: 0px 24px 24px 0px;
                display: -webkit-inline-box;
                display: -ms-inline-flexbox;
                display: inline-flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
            }
            .invo-note-wrap,
            .note-title {
                display: flex;
                align-items: center;
            }
            .invo-note-wrap,
            .note-title {
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .note-title span,
            .note-desc {
                padding-left: 10px;
            }
            @media print {
                .d-print-none {
                    display: none !important;
                }
            }
            .invo-btns span {
                padding-left: 10px;
            }
            .invoice-agency-details {
                text-align: right;
                padding-top: 20px;
            }
            .invoice-logo-content.bg-black {
                padding: 30px 50px;
            }
            .invoice-txt {
                color: #fff;
                text-align: right;
                font-family: Inter;
                font-size: 40px;
                font-style: normal;
                font-weight: 400;
                line-height: 40px;
            }
            .invo-head-wrap {
                display: flex;
                justify-content: end;
                padding-bottom: 10px;
            }
            .pt-32 {
                padding-top: 32px;
            }
            .agency-table thead tr th:first-child {
                text-align: left;
            }
            .agency-table thead tr th:nth-child(2) {
                text-align: left;
            }
            .agency-table thead tr th:nth-child(3),
            .agency-table tbody tr td:nth-child(3) {
                text-align: center;
            }
            .agency-table thead tr th:nth-child(4),
            .agency-table tbody tr td:nth-child(4) {
                text-align: center;
            }

            /************************* 3.Hotel Invoice CSS **************************/
            .invoice-logo-hotel {
                background-image: url(https://up2client.com/envato/digital-invoica/main-file/assets/images/hotel/blue-bg.svg);
                background-repeat: no-repeat;
                width: 40%;
                height: auto;
                background-size: cover;
                padding: 30px 50px;
            }
            .pink-bg {
                background-image: url(https://up2client.com/envato/digital-invoica/main-file/assets/images/hotel/pink-bg.png);
                background-repeat: no-repeat;
                width: 100%;
                height: auto;
                background-size: auto;
                background-position: right;
                padding: 30px 0;
                background-size: contain;
            }
            .invoice-logo-hotel-left {
                background-image: url(https://up2client.com/envato/digital-invoica/main-file/assets/images/hotel/black-bg.svg);
                background-repeat: no-repeat;
                width: 60%;
                height: auto;
                background-size: cover;
                padding: 21px 50px;
            }
            .invo-head-content.invoice-logo-hotel-left {
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-wrap: wrap;
            }
            img.txt-img {
                position: absolute;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .invo-head-content.invoice-logo-hotel-left .invo-head-wrap,
            .invo-head-content.invoice-logo-hotel-left
                .invo-head-wrap.invoi-date-wrap {
                width: 100%;
            }
            .booking-content-wrap {
                display: flex;
                justify-content: space-between;
                column-gap: 4px;
            }
            .detail-col {
                width: 100%;
                background: #f5f5f5;
                padding: 9px 10px;
            }
            .second-row {
                margin-top: 4px;
            }
            .item-wid {
                width: 18%;
            }
            .desc-wid {
                width: 36%;
            }
            .qty-wid {
                width: 10%;
            }
            .tax-row.bottom-border,
            .disc-row.bottom-border {
                border-bottom: 2px solid #12151c;
            }
            .payment-table-wrap {
                padding: 10px 20px;
                background: #f5f5f5;
                margin-top: 35px;
                position: relative;
                z-index: 10;
            }
            table.invo-payment-table.invo-payment-table {
                width: 100%;
            }
            .invo-payment-table {
                border-collapse: collapse;
            }
            .payemnt-wid,
            .date-wid,
            .trans-wid,
            .amount-wid {
                width: 33.33%;
                text-align: left;
                padding: 10px 0;
            }
            .invo-paye-row {
                border-top: 2px solid #12151c;
            }
            .payment-desc.payment-desc {
                padding: 20px 0 0;
            }
            .wid-40-hotel {
                width: 135px;
            }
            .hotel-table thead tr th {
                padding-bottom: 10px;
            }
            .hotel-table thead tr th:first-child {
                text-align: left;
            }
            .hotel-table thead tr th:nth-child(2) {
                text-align: left;
            }

            /************************* Restaurant CSS **************************/
            .sno-wid {
                width: 5%;
            }
            .re-desc-wid {
                width: 22%;
            }
            .re-price-wid {
                width: 12%;
            }
            .re-qty-wid {
                width: 15%;
            }
            .re-price-wid-qty {
                width: 20%;
            }
            .rest-payment-bill {
                display: flex;
            }
            .payment-wrap {
                border: 2px solid #12151c;
                padding: 0px 20px 0px 20px;
                display: inline-block;
            }
            .signature-wrap {
                text-align: center;
                align-items: center;
                position: relative;
                left: 19%;
                padding-top: 50px;
            }
            .bus-invo-no-date-wrap {
                padding: 20px 0px;
                display: flex;
                justify-content: space-between;
            }
            .res-contact {
                padding-top: 30px;
            }
            .res-bottom {
                padding-bottom: 30px;
            }
            .restaurant-header {
                padding: 0 50px;
            }
            .restaurant-table thead th {
                padding: 10px 0;
            }
            .restaurant-table tbody td:nth-child(odd) {
                background: #f5f5f5;
                text-align: center;
            }
            .restaurant-table tbody td:nth-child(2) {
                padding-left: 30px;
            }
            .restaurant-table thead th:nth-child(2) {
                padding-left: 30px;
                text-align: left;
            }
            .restaurant-table thead tr th:first-child {
                text-align: left;
            }
            .disc-row td {
                padding-bottom: 20px;
            }
            .res-pay-table-res {
                border-collapse: collapse;
                width: 100%;
            }
            .res-pay-table-res .pay-type {
                padding: 20px;
            }
            .p-0 {
                padding: 0px !important;
            }
            .restaurant .rest-payment-bill {
                align-items: center;
            }
            .restaurant .payment-wrap {
                border: 2px solid #f5f5f5;
            }
            .restaurant .invoice-logo-content {
                align-items: center;
            }
            .res-no {
                width: 10%;
            }
            .res-pric {
                width: 12%;
            }
            .res-qty {
                width: 20%;
            }
            .res-total {
                width: 16%;
            }
            .restaurant .res-pay-table .pay-type {
                padding: 20px;
            }
            .invoice-logo-res {
                display: flex;
                align-items: center;
                justify-content: end;
            }

            /************************* 4.Bus Booking Invoice CSS **************************/
            .booking-info:before {
                content: "";
                position: absolute;
                border-left: 2px solid #e11d48;
                height: 39px;
                top: 12px;
                left: -13px;
            }
            .booking-info .circle:before {
                content: "";
                position: absolute;
                width: 8px;
                height: 8px;
                border-radius: 50px;
                background-color: #e11d48;
                left: -16px;
                top: 7px;
            }
            .invoice-timing-wrap {
                display: flex;
                justify-content: flex-start;
            }
            .invo-time-col {
                width: 50%;
                display: inline-block;
                padding: 0 12px 0 18px;
                position: relative;
            }
            .booking-info p,
            .booking-info {
                position: relative;
            }
            .bus-detail-wrap {
                display: grid;
                grid-column: 2;
                grid-template-columns: auto auto auto auto;
                gap: 20px 30px;
                grid-row: 2;
                grid-template-columns: repeat(2, 1fr);
                padding: 30px;
                border: 2px solid #12151c;
            }
            .bus-detail-col.border-bottom {
                border-bottom: 1px solid #888888;
                padding-bottom: 20px;
            }
            .bus-detail-col {
                display: inline-flex;
            }
            .bus-type {
                width: 50%;
            }
            .bus-header img {
                display: block;
            }
            .wid-100 {
                width: 100%;
            }
            .bus-txt {
                color: #12151c;
                font-family: Inter;
                font-size: 40px;
                font-style: normal;
                font-weight: 400;
                line-height: 40px;
                text-align: right;
            }
            .bus-header-logo {
                display: flex;
                align-items: flex-start;
                justify-content: space-between;
            }
            .bus-detail-sec {
                margin-top: 40px;
                background: #f5f5f5;
                border: none;
            }
            .bus-detail-table thead th {
                padding-bottom: 10px;
            }
            .bus-header .wid-20 {
                width: 40%;
            }
            .bus-detail-table thead tr th:first-child {
                text-align: left;
            }
            .invo-bill-total.bus-invo-total {
                width: 33.33%;
            }

            /************************* 5.Money Exchange Invoice CSS **************************/
            .money-txt {
                color: #12151c;
                text-align: right;
                font-family: Inter;
                font-size: 40px;
                font-style: normal;
                font-weight: 400;
                line-height: 40px;
            }
            .transfer-detail-wrap {
                display: flex;
                justify-content: space-between;
            }
            .left-money-transfer {
                display: flex;
            }
            .right-money-transfer {
                border: 2px solid #12151c;
                padding: 20px 20px 10px;
            }
            .left-money-top-row {
                padding-right: 100px;
            }
            .right-money-block {
                display: flex;
                align-items: center;
            }
            .money-col-one {
                padding: 0 25px 0 0;
                display: flex;
                flex-wrap: wrap;
                flex-direction: column;
            }
            .money-col-two {
                padding: 0 25px 0;
            }
            .money-header {
                padding-top: 50px;
            }
            .car-txt {
                color: #12151c;
                text-align: right;
                font-family: Inter;
                font-size: 40px;
                font-style: normal;
                font-weight: 400;
                line-height: 40px;
            }
            .black-boder {
                background: #12151c;
                height: 5px;
                width: 70%;
            }
            .green-boder {
                background: #60a917;
                height: 5px;
                width: 30%;
            }
            .money-boder-sec {
                display: flex;
            }
            .money-detail-wrap {
                margin-top: 40px;
            }
            .transfer-title {
                border-bottom: 2px solid #12151c;
                padding-bottom: 10px;
            }
            .money-tran-title-wrap {
                padding: 0 0 20px 0;
            }
            .tra-title {
                padding: 10px 0 5px 0;
            }
            .mon-exchange-rate {
                padding-bottom: 20px;
            }
            .money-col-three {
                padding: 0 0 0 25px;
                display: flex;
                flex-wrap: wrap;
                flex-direction: column;
            }
            .money-content {
                text-transform: uppercase;
                padding-bottom: 10px;
            }
            .tra-money {
                padding: 5px 0 10px;
            }
            .mon-paid-left-data {
                padding-right: 120px;
            }

            /************************* 6.Car Invoice CSS **************************/
            .disply-none {
                display: none;
            }
            .detail-col-car {
                background: rgb(255 168 1 / 8%);
                width: 230px;
                padding: 20px;
            }
            .detail-col-car1 {
                width: 247px;
                padding: 9px 10px;
                background: #f5f5f5;
            }
            .car-header-img {
                background-image: url(https://up2client.com/envato/digital-invoica/main-file/assets/images/car/car-header-img.png);
                background-repeat: no-repeat;
                padding: 30px 50px 0 50px;
            }
            .car-bottom-sec {
                background-image: url(https://up2client.com/envato/digital-invoica/main-file/assets/images/car/car-footer-img.png);
                background-repeat: no-repeat;
                padding: 40px 50px 0;
                background-position: bottom;
            }
            .car-invoice .invo-head-wrap {
                justify-content: space-between;
                padding-bottom: 0;
            }
            .car-detail-table thead tr th {
                padding-bottom: 10px;
            }
            .invo-addition-wrap.invo-addition-wrap-car {
                justify-content: space-between;
            }
            .car-conta-mail-wrap {
                display: flex;
                justify-content: space-between;
            }
            .car-contact,
            .car-mail {
                display: flex;
            }
            .bus-conatct-img {
                padding-right: 10px;
            }
            .bus-mail-img {
                padding-right: 10px;
            }
            .car-bottom {
                padding-bottom: 40px;
            }
            .car-invoice .res-pay-table-car .pay-data:last-child {
                border-bottom: none;
            }
            .car-invoice .res-pay-table-car .pay-type {
                padding: 20px;
            }
            .car-invoice .payment-wrap.payment-wrap-car-details {
                padding: 0;
            }

            /************************* 7.Movie Booking Invoice CSS **************************/
            .invoice-logo-movie {
                border-radius: 0px 0px 188px 0px;
                background: rgb(55 66 250 / 15%);
                padding: 30px 50px;
            }
            .movie-txt {
                color: #12151c;
                font-family: Inter;
                font-size: 40px;
                font-style: normal;
                font-weight: 400;
                line-height: 40px;
            }
            .movie-details-wrap {
                position: relative;
                display: flex;
                width: 100%;
                padding: 50px 0 0;
                column-gap: 30px;
                align-items: center;
            }
            .movie-detail-col {
                display: flex;
                align-items: center;
                padding: 10px 10px;
            }
            .movie-detail-col .movie-name {
                width: 120px;
            }
            .w-40 {
                width: 40%;
            }
            .invo-addition-wrap.movi-add-wrap {
                justify-content: flex-end;
            }
            .invoice-table.movie-table thead th {
                color: #12151c;
                padding: 10px 0;
            }
            .movie-bg {
                background: #3742fa;
            }
            .invo-paye-row-movie {
                border-top: 2px solid white;
            }
            .movie-must-read-wrap {
                padding-bottom: 40px;
            }
            .movie-title {
                padding-right: 50px;
            }
            .pt-30 {
                padding-top: 30px;
            }
            .movie-col-left img {
                border-radius: 10px;
            }
            .invoice-header .invo-head-content .invo-head-content-movie:before {
                content: "";
                border-radius: 0px 0px 0px 108px;
                background: #3742fa;
                padding: 30px 50px;
                position: absolute;
                width: 135%;
                right: 0;
                height: 100%;
            }
            .invo-head-content-movie {
                position: relative;
            }
            .pos-relative {
                position: relative;
            }
            .invo-head-content-movie p {
                padding: 30px 50px;
            }

            /************************* 8.Stadium Booking Invoice CSS **************************/
            .stadium-title-txt {
                color: #fff;
                font-family: Inter;
                font-size: 40px;
                font-style: normal;
                font-weight: 400;
                line-height: 40px;
                letter-spacing: 8px;
            }
            .stadium-title {
                background: #60a917;
                padding: 50px 0 20px 20px;
            }
            .stadium-table {
                display: flex;
            }
            .stadium-first-sec {
                width: 30%;
            }
            .stadium-second-sec {
                width: 70%;
            }
            .stadium-first {
                display: flex;
                column-gap: 30px;
            }
            .stadium-second-sec-full {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                column-gap: 30px;
            }
            .stadium-second {
                padding-right: 20px;
                padding-bottom: 40px;
                margin-top: 40px;
                position: relative;
                z-index: 2;
            }
            .stadium-second:before {
                content: "";
                background: #f5f5f5;
                width: calc(100% + 50px);
                height: 100%;
                position: absolute;
                left: -50px;
                z-index: -1;
                top: 0;
            }
            .book-txt {
                color: #60a917;
                font-family: Inter;
                font-size: 20px;
                font-style: normal;
                font-weight: 700;
                line-height: 24px;
            }
            .stadium-header {
                padding-left: 50px;
            }
            .booking-info.booking-inf1 .circle:before {
                background-color: #6a00ff;
            }
            .booking-info.booking-inf1:before {
                border-left: 2px solid #6a00ff;
            }
            .stadium-table div:first-child {
                width: 100px;
            }
            .book-table thead tr th:first-child,
            .book-table thead tr th:nth-child(2) {
                text-align: left;
            }
            .book-table,
            .price-table {
                width: 100%;
                border-collapse: collapse;
            }
            .book-table thead tr th:last-child,
            .book-table tbody tr td:last-child {
                text-align: center;
            }
            .book-table tbody tr td:nth-child(3) {
                text-align: center;
            }
            .book-table thead tr th {
                padding: 10px 0;
                border-bottom: 2px solid #12151c;
            }
            .book-table tbody td,
            .price-table tbody td {
                padding: 20px 0px;
            }
            .price-table thead tr th {
                padding: 10px 0;
            }
            .book-table tbody,
            .book-table tr:last-child {
                border: none;
            }
            .wid-26 {
                width: 26%;
            }
            .price-table thead tr th:first-child {
                text-align: left;
            }
            .price-table thead tr th:last-child,
            .price-table tbody tr td:last-child {
                text-align: right;
            }
            .price-table tbody tr td:nth-child(2),
            .price-table tbody tr td:nth-child(3) {
                text-align: center;
            }
            .stadium-table-total-wrap {
                display: flex;
                justify-content: end;
            }
            .stadium-table-total-wrap {
                display: flex;
                justify-content: end;
            }
            .stadium-table-total {
                width: 50%;
                border-collapse: collapse;
            }
            .stadium-invoice .invoice-logo-content {
                align-items: center;
            }

            /************************* 9.Internet Booking Invoice CSS **************************/
            .internet-txt {
                color: #60a917;
                font-family: Inter;
                font-size: 40px;
                font-style: normal;
                font-weight: 700;
                line-height: 40px;
                letter-spacing: 6px;
            }
            .internet .invoice-content-wrap {
                height: auto;
            }
            .internet-txt {
                color: #60a917;
                font-family: Inter;
                font-size: 40px;
                font-style: normal;
                font-weight: 700;
                line-height: 40px;
                letter-spacing: 6px;
            }
            .internet-invoice {
                display: flex;
                column-gap: 40px;
            }
            .internet-invoice .invo-head-wrap {
                justify-content: start;
            }
            .internet-content {
                background-image: url(https://up2client.com/envato/digital-invoica/main-file/assets/images/internet/black-img.svg);
                background-repeat: no-repeat;
                padding: 30px 50px 0;
            }
            .detail-col-car1.internet-bg {
                background: rgb(96 169 23 / 8%);
            }
            .internet-invoice {
                padding-bottom: 105px;
            }
            .internet-header {
                background-image: url(https://up2client.com/envato/digital-invoica/main-file/assets/images/internet/green-img.svg);
                background-repeat: no-repeat;
            }
            .pt-15 {
                padding-top: 15px;
            }
            .internet-table thead tr th {
                padding-bottom: 10px;
            }
            .internet-table thead tr th:first-child,
            .internet-table tbody tr td:first-child {
                text-align: left;
                padding-left: 15px;
            }
            .internet-table thead tr th:nth-child(2) {
                text-align: left;
            }
            .internet-table thead tr th:last-child,
            .internet-table tbody tr td:last-child {
                text-align: right;
                padding-right: 15px;
            }
            .internet-table thead tr th:nth-child(3) {
                text-align: left;
            }
            .internet-images {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding-left: 50px;
            }
            .black-footer-img-sec {
                position: relative;
            }
            .black-footer-img-sec:before {
                content: "";
                width: 100px;
                height: 100px;
                background: #f5f5f5;
                bottom: 10px;
                right: 0;
                position: absolute;
                border-radius: 50px;
            }
            .black-footer-img-sec img {
                z-index: 1;
                position: relative;
                display: block;
            }
            .internet-add-details {
                width: 65%;
                position: relative;
            }
            .internet-bill-total {
                width: 35%;
                position: relative;
            }
            .invo-add-info-content.invo-add-info-content-internet {
                width: 65%;
            }
            .invo-bill-total.invo-bill-total-internet {
                width: 35%;
            }
            /************************* 10.Flight Booking Invoice CSS **************************/
            .flight-bg-top {
                display: flex;
            }
            .color-blue-flight {
                color: #6a00ff;
            }
            .booking-info.booking-info-flight .circle:before {
                background-color: #6a00ff;
            }
            .booking-info.booking-info-flight:before {
                border-left: 2px solid #6a00ff;
            }
            .flight-booking-wrap .payemnt-wid,
            .date-wid,
            .trans-wid,
            .amount-wid {
                width: 25%;
            }
            .flight-detail-table .invoice-table thead th {
                padding: 10px 0;
            }
            .flight-contact-mail-wrap {
                display: flex;
                justify-content: center;
                align-items: center;
                column-gap: 80px;
                margin-bottom: 20px;
                padding-top: 30px;
            }
            .Flight-contact,
            .flight-mail {
                display: flex;
                align-items: center;
            }
            .flight-thanks-bg {
                background-image: url(https://up2client.com/envato/digital-invoica/main-file/assets/images/flight/footer-svg-black.svg);
                background-repeat: no-repeat;
                width: 82%;
                height: auto;
                padding: 9px 0;
                text-align: center;
            }
            .flight-img2 {
                position: absolute;
                right: 0;
                top: 0;
            }
            .flight-img1 {
                width: 100%;
            }
            .term-con-list {
                margin: 0;
                padding: 0;
                padding-left: 20px;
            }
            .signature-wrap-flight {
                text-align: end;
                padding-top: 40px;
                position: relative;
            }
            .flight-img {
                padding-top: 15px;
            }
            .flight .invoice-logo {
                width: 40%;
                margin-top: 30px;
            }
            .flight-img1 img {
                display: block;
            }
            .flight-txt {
                color: #12151c;
                text-align: right;
                font-family: Inter;
                font-size: 40px;
                font-style: normal;
                font-weight: 400;
                line-height: 40px;
            }
            .flight-details {
                width: 50%;
                text-align: left;
            }
            .flight-re-price-wid {
                width: 16.66%;
            }
            .flight .invo-bill-total {
                width: 40%;
            }
            .flight .invo-addition-wrap {
                justify-content: space-between;
            }

            /************************* 11.Train Booking Invoice CSS **************************/
            .train-header-sec {
                background: #0050ef;
            }
            .train-table thead tr th {
                padding-bottom: 10px;
            }
            .train-txt {
                color: #fff;
                text-align: center;
                font-family: Inter;
                font-size: 40px;
                font-style: normal;
                font-weight: 400;
                line-height: 40px;
                letter-spacing: 6px;
                padding-bottom: 30px;
                padding: 30px;
            }
            .train-invoice .invo-head-wrap {
                justify-content: start;
                padding: 0 20px 20px 20px;
            }
            .color-train {
                color: #0050ef;
            }
            .invoice-logo-content-flight {
                padding: 0 50px;
            }
            .flight-img2:before {
                content: "";
                background-image: url(https://up2client.com/envato/digital-invoica/main-file/assets/images/flight/black-triangel.svg);
                width: 100%;
                height: 100%;
                position: absolute;
                background-repeat: no-repeat;
                background-position: right;
                bottom: -80px;
            }
            .footer-img-sec {
                position: relative;
                display: flex;
                text-align: right;
                justify-content: flex-end;
            }
            .footer-img1 img {
                position: absolute;
                bottom: 0px;
                left: 0;
            }
            .signature-wrap-flight:before {
                content: "";
                background-image: url(https://up2client.com/envato/digital-invoica/main-file/assets/images/flight/footer-traingle.svg);
                width: 100%;
                height: 118px;
                position: absolute;
                background-repeat: no-repeat;
                background-position: left;
                left: -50px;
                bottom: 0;
            }
            .bg-train {
                background: #0050ef;
            }
            .train-thanks-bg {
                padding: 20px 0;
                text-align: center;
                margin-top: 40px;
            }
            .mon-send-left-data {
                padding-right: 150px;
            }
            .mon-sent-content-wrap {
                display: flex;
                align-items: center;
                padding: 15px 0 0;
            }
            .mon-send-col-one,
            .mon-send-col-two {
                padding: 5px 0;
            }
            .w-60 {
                width: 60%;
            }
            .train-header {
                padding-left: 50px;
            }
            .train-table thead tr th:first-child,
            .train-table thead tr th:nth-child(2) {
                text-align: left;
            }
            .train-table tbody tr td:nth-child(3) {
                text-align: center;
            }
            .train-table thead tr th:first-child,
            .train-table thead tr th:nth-child(2) {
                text-align: left;
            }
            .train-table thead tr th:last-child,
            .train-table tbody tr td:last-child {
                text-align: right;
            }
            .movie-detail-col.train-detail-col {
                padding: 6px 5px;
            }
            .train-invoice .invoice-logo-content {
                align-items: center;
            }

            /************************* 12.Ecommrece Invoice CSS **************************/
            .ecommerce .bus-invo-num,
            .ecommerce .bus-invo-date {
                display: flex;
            }
            .ecommerce-txt {
                color: #fff;
                font-family: Inter;
                font-size: 40px;
                font-style: normal;
                font-weight: 400;
                line-height: 40px;
                letter-spacing: 6px;
            }
            .ecommerce-header {
                display: flex;
                align-items: center;
                justify-content: space-between;
                background: #12151c;
                padding: 30px 50px;
            }
            .bg-pink {
                background: #e11d48;
            }
            .pay-type {
                padding: 20px 20px 20px 0px;
            }
            .pay-data {
                border-bottom: 1px solid #888888;
            }
            .res-pay-table {
                border-collapse: collapse;
                width: 100%;
            }
            .ecommerce .bus-invo-no-date-wrap {
                display: block;
                padding-top: 20px;
                padding-bottom: 0;
                width: 50%;
            }
            .ecommerce-first-sec {
                display: flex;
                justify-content: space-between;
                position: relative;
            }
            .ecommerce-img-black {
                clip-path: polygon(0 0, 100% 1%, 100% 100%, 12% 100%);
                width: calc(50% + 50px);
                height: 40px;
                background: #12151c;
                right: -50px;
                top: -1px;
                position: absolute;
            }
            .ecommerce-table thead tr th {
                padding-bottom: 10px;
            }
            .ecommerce .ecommerce-table thead tr th:nth-child(2) {
                text-align: left;
            }
            .ecomm-price-wid {
                width: 16.66%;
            }
            .ecommerce .ecommerce-table thead tr th:first-child {
                text-align: left;
            }
            .ecommerce .ecommerce-table thead tr th:last-child,
            .ecommerce .ecommerce-table tbody tr td:last-child {
                text-align: right;
                padding-right: 10px;
            }
            .ecommerce .ecommerce-table tbody tr td:nth-child(3),
            .ecommerce .ecommerce-table tbody tr td:nth-child(4) {
                text-align: center;
            }
            .ecommerce .payment-wrap-car .pay-data:last-child {
                border-bottom: none;
            }

            /************************* 13.Fitness Invoice CSS **************************/
            .color-orange {
                color: #fa6800;
            }
            .color-coffe {
                color: #825a2c;
            }
            .fit-no {
                width: 12%;
                text-align: left;
            }
            .fit-des {
                width: 40%;
                text-align: left;
            }
            .fit-price,
            .fit-hour,
            .fit-total {
                width: 16.66%;
            }
            .fit-total {
                text-align: right;
            }
            .fitness-table tbody tr td:nth-child(3),
            .fitness-table tbody tr td:nth-child(4) {
                text-align: center;
            }
            .fitness-table tbody tr td:last-child {
                text-align: right;
            }
            .fitness .invo-bill-total,
            .ecommerce .invo-bill-total {
                width: 35%;
            }
            .fitness .invo-add-info-content {
                width: 50%;
            }
            .fitness .invo-total-table td:last-child {
                text-align: right;
            }
            .payment-wrap-fitness {
                border: 2px solid #fa6800;
                background: rgba(250, 104, 0, 0.08);
            }
            .fitness-sec {
                display: flex;
                justify-content: space-between;
                padding-bottom: 40px;
            }
            .fitness .pay-data:last-child {
                border-bottom: none;
            }
            .fitness-header-wrap {
                border-radius: 0px 100px 0px 0px;
                background: #12151c;
                padding: 30px 0 30px 50px;
            }
            .fitness-txt {
                color: rgb(255 255 255 / 20%);
                font-family: Inter;
                font-size: 40px;
                font-style: normal;
                font-weight: 400;
                line-height: 40px;
                letter-spacing: 4px;
            }
            .fitness-header {
                width: 80%;
            }
            .fitness-invoice-content {
                background: #fa6800;
                display: flex;
                column-gap: 30px;
                padding: 10px 50px;
            }
            .fitness-contact-content {
                display: flex;
                border-radius: 20px 0px 0px 20px;
                background: #505050;
                padding: 8px 20px;
                position: absolute;
                right: 0;
                width: 65%;
                column-gap: 30px;
            }
            .fitness-contact-wrap {
                display: flex;
                margin-top: 30px;
                align-items: center;
            }
            .fitness .fitness-table thead tr th {
                padding-bottom: 10px;
            }

            /************************* 14.Hospital Invoice CSS **************************/
            .hospital-header {
                padding: 30px 50px;
            }
            .hospital-contact-wrap {
                display: flex;
                column-gap: 30px;
                position: relative;
            }
            .hospital-txt {
                color: #12151c;
                font-family: Inter;
                font-size: 40px;
                font-style: normal;
                font-weight: 400;
                line-height: 40px;
                letter-spacing: 6px;
            }
            .hospital-green-box {
                background: #2ed573;
                display: flex;
                align-items: end;
                padding: 0 16px 20px 16px;
                justify-content: center;
                height: 183px;
                width: 100%;
            }
            .hospital-contact {
                width: 70%;
            }
            .hospital-contact-details {
                display: flex;
                column-gap: 30px;
            }
            .hospital-second {
                width: 30%;
                position: absolute;
                right: 0;
                top: -100px;
            }
            .color-green-hospital {
                color: #2ed573;
            }
            .width-70 {
                width: 70%;
            }
            .width-30 {
                width: 30%;
            }
            .invo-head-wrap-hospital {
                justify-content: space-between;
            }
            .bg-green-hospital {
                background: #2ed573;
            }
            .mt-40 {
                margin-top: 40px;
            }
            .hospital-table thead th {
                padding-top: 10px;
                padding-bottom: 10px;
            }
            .hospital-wid1 {
                width: 10%;
                text-align: center;
            }
            .hospital-wid2 {
                width: 50%;
                padding-left: 38px;
            }
            .hospital-wid3 {
                width: 20%;
                text-align: center !important;
            }
            .hospital-wid4 {
                width: 20%;
                text-align: right !important;
                padding-right: 10px;
            }
            .hospital-table tbody tr td:nth-child(odd) {
                background: #f5f5f5;
                text-align: center;
            }
            .hospital-table th {
                background: #2ed573;
            }
            .hospital-table tbody tr td:nth-child(2) {
                padding-left: 38px;
            }
            .hospital-rule {
                padding-bottom: 40px;
            }
            .hospital-table thead tr th:nth-child(2) {
                text-align: left;
            }

            /************************* 15.Photostudio Invoice CSS **************************/
            .photo-txt {
                color: #2e006f;
                text-align: right;
                font-family: Inter;
                font-size: 38px;
                font-style: normal;
                font-weight: 700;
                line-height: 38px;
                letter-spacing: 5.7px;
            }
            .photostudio-table tbody tr td:nth-child(3),
            .photostudio-table tbody tr td:nth-child(4) {
                text-align: center;
            }
            .photostudio-table tbody tr td:nth-child(5) {
                text-align: right;
                padding-right: 20px;
            }
            .photostudio-table tbody tr td:nth-child(1) {
                text-align: left;
                padding-left: 20px;
            }
            .color-green-photo {
                color: #00d061;
            }
            .bus-detail-wrap.photostudio-detail-wrap {
                border: 2px solid #2e006f;
                background: #fff;
                margin-top: 40px;
            }
            .invo-cont-wrap.invo-contact-photo {
                padding-top: 15px;
            }
            .invo-to-wrap-photo {
                width: 70%;
            }
            .invo-pay-to-wrap-photo {
                width: 30%;
            }
            .invo-head-wrap.invo-head-wrap-photo {
                justify-content: space-between;
            }
            .pr-20 {
                padding-right: 20px;
            }
            .pl-20 {
                padding-left: 20px !important;
            }
            .invo-addition-wrap-photo {
                justify-content: space-between;
            }
            .photostudio .invo-add-info-content {
                width: 50%;
            }
            .photostudio .invo-bill-total {
                width: 40%;
            }
            .photostudio .invo-total-table td:last-child {
                text-align: right;
            }
            .photostudio .invo-bill-total table {
                width: 100%;
            }
            .photostudio-table thead tr th:nth-child(2) {
                padding-left: 35px;
            }
            .photostudio-table tbody tr td:nth-child(2) {
                padding-left: 35px;
            }
            .phtotstudio-img {
                position: relative;
            }
            .photo-logo {
                position: absolute;
                right: 50px;
                bottom: 5px;
            }
            .photo-footer-sec-img img {
                display: block;
            }
            .agency-bottom-content-photo,
            .agency-bottom-clean,
            .agency-bottom-content-fitness,
            .agency-bottom-content-travel {
                padding-bottom: 0;
            }

            /************************* 16.Cleaning Invoice CSS **************************/
            .cleaning-txt {
                color: #00baff;
                font-family: Inter;
                font-size: 40px;
                font-style: normal;
                font-weight: 700;
                line-height: 40px;
                margin-top: 40px;
            }
            .color-cleaning {
                color: #00baff;
            }
            .blue-img1 {
                width: 176px;
                height: 176px;
                transform: rotate(-45deg);
                background: #00baff;
                position: absolute;
                top: -92px;
                right: 86px;
            }
            .blue-img2 {
                width: 40px;
                height: 40px;
                background: #00baff;
            }
            .cleaning-blue-img {
                position: relative;
            }
            .blue-img1 {
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .blue-img1 img {
                transform: rotate(45deg);
            }
            .blue-img2 {
                position: absolute;
                left: -45px;
                top: 0;
            }
            .flight-pt {
                padding: 0 0 10px;
                width: 25%;
            }
            .cleaning-table-wrap {
                padding: 20px;
            }
            .blue-bottom-img1 {
                background: #00baff;
                width: 68.433px;
                height: 68.433px;
                transform: rotate(135deg);
            }
            .blue-bottom-img2 {
                width: 15.553px;
                height: 15.553px;
                background: #00baff;
                position: absolute;
                top: 0px;
                left: -25px;
            }
            .cleaning-blue-img-bottom {
                position: relative;
                margin-top: 68px;
            }
            .blue-img2-bottom {
                position: absolute;
                left: 50px;
                bottom: 67px;
            }
            .blue-img1-bottom img {
                display: block;
            }
            .cleaning-img-bottom-sec-wrap {
                display: flex;
                padding-right: 50px;
                column-gap: 30px;
            }
            .cleaning-header {
                padding-left: 50px;
            }
            .invo-head-wrap-clean {
                justify-content: space-between;
                padding-bottom: 0;
            }
            .cleaning-table thead tr th {
                padding-bottom: 10px;
            }
            .cleaning-contact {
                text-align: right;
            }

            /************************* 17.Travel Invoice CSS **************************/
            .travel-txt-bg {
                color: rgb(18 21 28 / 20%);
                text-align: center;
                font-family: Inter;
                font-size: 40px;
                font-style: normal;
                font-weight: 400;
                line-height: 40px;
                letter-spacing: 40px;
                background: url(https://up2client.com/envato/digital-invoica/main-file/assets/images/travel/txt-bg.svg);
                background-repeat: no-repeat;
                width: 100%;
                background-size: cover;
                padding: 30px 0;
                top: 10px;
                position: relative;
                z-index: 2;
            }
            .travel-txt {
                position: relative;
                width: 62%;
                height: 100%;
            }
            .travel-txt:before {
                content: "";
                background-image: url(https://up2client.com/envato/digital-invoica/main-file/assets/images/travel/light-grey.svg);
                width: 100%;
                height: 100%;
                position: absolute;
                background-repeat: no-repeat;
                background-size: cover;
                top: 20px;
                z-index: 1;
            }
            .travel-logo-sec-wrap {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            .travel-logo {
                padding-left: 50px;
                width: 30%;
            }
            .travel-color {
                color: #84cc16;
            }
            .bus-invo-no-date-wrap.bus-invo-no-date-wrap-travel {
                padding-bottom: 0;
            }
            .travel-detail-wrap {
                margin-top: 40px;
                border: 2px solid #84cc16;
                background: rgba(132, 204, 22, 0.08);
            }
            .border-bottom.travel {
                border-bottom: 1px solid #84cc16;
            }
            .travel-table thead tr th:first-child,
            .travel-table tbody tr td:first-child {
                text-align: left;
                padding-left: 15px;
            }
            .travel-table tbody tr td:nth-child(2),
            .travel-table tbody tr td:nth-child(3) {
                text-align: center;
            }
            .travel-table thead tr th:last-child,
            .travel-table tbody tr td:last-child {
                text-align: right;
                padding-right: 15px;
            }
            .travel-bottom-sec-wrap {
                display: flex;
                justify-content: space-between;
            }
            .footer-img2 img {
                display: block;
            }
            .invo-addition-wrap-travel {
                justify-content: space-between;
            }
            .travel-invoice .invo-bill-total {
                width: 35%;
            }
            .travel-table thead tr th {
                padding-bottom: 10px;
            }
            .travel-invoice .term-con-list {
                padding: 0;
                margin: 0;
                padding-left: 20px;
            }
            .travel-contact-sec {
                padding: 15px 50px;
            }
            .bus-invo-num-travel {
                display: flex;
                column-gap: 40px;
            }

            /************************* 18.Student Invoice CSS **************************/
            .student-txt {
                color: #fff;
                font-family: Inter;
                font-size: 40px;
                font-style: normal;
                font-weight: 400;
                line-height: 40px;
                letter-spacing: 6px;
            }
            .student-header-details {
                display: flex;
                justify-content: space-between;
            }
            .student-header-bg {
                background-image: url(https://up2client.com/envato/digital-invoica/main-file/assets/images/student/blue-img.svg);
                background-repeat: no-repeat;
                padding: 30px 50px;
                text-align: center;
                position: absolute;
                right: 0px;
                width: calc(100% - 20px);
                height: 100%;
                z-index: 2;
            }
            .student-invoice-content:before {
                content: "";
                background-image: url(https://up2client.com/envato/digital-invoica/main-file/assets/images/student/black-img.svg);
                background-repeat: no-repeat;
                position: absolute;
                height: 100%;
                width: 100%;
                z-index: 1;
                right: 0px;
            }
            .student-invoice-content:after {
                content: "";
                background-image: url(https://up2client.com/envato/digital-invoica/main-file/assets/images/student/grey-img.svg);
                background-repeat: no-repeat;
                position: absolute;
                height: 100%;
                z-index: 0;
                width: 100%;
                right: 10px;
                top: 20px;
            }
            .student-invoice-content {
                position: relative;
            }
            .student-color {
                color: #00baff;
            }
            .student-header {
                padding: 30px 0 0 50px;
            }
            .student-invoice thead tr th:first-child,
            .student-invoice thead tr th:nth-child(2),
            .student-invoice thead tr th:nth-child(3) {
                text-align: left;
            }
            .student-invoice thead tr th:last-child,
            .student-invoice tbody tr td:last-child {
                text-align: right;
            }
            .student-invoice thead tr th {
                padding-bottom: 10px;
            }
            .pb-40 {
                padding-bottom: 40px;
            }
            .student .invo-head-wrap {
                justify-content: space-around;
            }

            /************************* 19.Coffee Invoice CSS **************************/
            .coffee-shop-back-img-one img {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
            }
            .coffee-txt {
                color: #12151c;
                font-family: Inter;
                font-size: 40px;
                font-style: normal;
                font-weight: 400;
                line-height: 40px;
                letter-spacing: 6px;
                text-align: right;
            }
            .brown-bg {
                width: 49.98px;
                height: 39.983px;
                background: #825a2c;
            }
            .invo-head-content-coffee {
                display: flex;
                column-gap: 30px;
                align-items: center;
                padding: 10px;
                background: #825a2c;
                width: 100%;
            }
            .invo-head-content-coffee .invo-head-wrap {
                padding-bottom: 0;
            }
            .invoice-logo-content-coffee {
                display: flex;
                flex-wrap: wrap;
                column-gap: 30px;
                align-items: center;
            }
            .coffee-table thead tr th:first-child {
                text-align: left;
            }
            .coffee-table thead tr th:last-child,
            .coffee-table tbody tr td:last-child {
                text-align: right;
            }
            .coffee-table tbody tr td:nth-child(2),
            .coffee-table tbody tr td:nth-child(3) {
                text-align: center;
            }
            .coffee-table thead tr th {
                padding-bottom: 10px;
            }
            .coffee-triangle-image {
                content: "";
                clip-path: polygon(52% 99%, 0 1%, 100% 0);
                background: #12151c;
                width: 260px;
                height: 130px;
                position: absolute;
                right: 0;
                top: -1.2px;
            }
            .coffee-triangle-image:before {
                content: "";
                background-image: url(https://up2client.com/envato/digital-invoica/main-file/assets/images/coffee-shop/triangle-top.svg);
                background-repeat: no-repeat;
                position: absolute;
                left: -4px;
                top: 0;
                height: 100%;
                width: 100%;
                z-index: 2;
            }
            .header-top-coffee {
                padding: 11px 0;
            }
            .invoice-logo-coffee {
                width: 20%;
            }
            .invo-head-content-coffee {
                width: 50%;
                z-index: 1;
            }
            .coffee-bottom-sec-footer {
                display: flex;
                margin-top: 50px;
            }
            .coffee-conta-mail-wrap {
                display: flex;
                align-items: center;
                background: #825a2c;
                padding: 8px 50px;
                justify-content: space-around;
            }
            .coffee-bottom-sec {
                width: 30%;
                position: relative;
            }
            .coffee-bottom-sec {
                width: 16.67%;
            }
            .coffee-thank-txt {
                width: 83.86%;
                margin-left: auto;
            }
            .coffee-bottom-contact {
                width: 83.86%;
            }
            .coffee-invoice .rest-payment-bill .pay-data:last-child {
                border-bottom: none;
            }
            .coffee-txt-bottom {
                margin-top: 20px;
                text-align: center;
                margin-bottom: 24px;
            }
            .coffee-contact,
            .coffee-mail {
                display: flex;
                align-items: center;
            }
            .coffee-triangle-image-footer {
                rotate: 180deg;
                bottom: 0;
                top: unset;
                right: unset;
                left: 0;
            }
            .coffee-contact svg {
                margin-right: 10px;
            }
            .coffee-mail svg {
                margin-right: 10px;
            }
            .invoice-logo-coffee img {
                width: 100%;
            }
            /************************* Domain CSS **************************/
            .domain-header {
                position: relative;
            }
            .domain-invoice .invoice-logo-content-domain:before {
                content: "";
                position: absolute;
                background-image: url(https://up2client.com/envato/digital-invoica/main-file/assets/images/domain/black-img.svg);
                background-repeat: no-repeat;
                width: 80%;
                height: 100%;
                z-index: 2;
                top: 0;
            }
            .domain-invoice .invoice-logo-content-domain:after {
                content: "";
                position: absolute;
                background-image: url(https://up2client.com/envato/digital-invoica/main-file/assets/images/domain/grey-img.svg);
                background-repeat: no-repeat;
                width: 80%;
                height: 100%;
                z-index: 1;
            }
            .domain-invoice .invoice-logo.invoice-logo-domain:before {
                content: "";
                position: absolute;
                background-image: url(https://up2client.com/envato/digital-invoica/main-file/assets/images/domain/orange-img.svg);
                background-repeat: no-repeat;
                width: 100%;
                height: 100%;
                top: 0;
                z-index: 3;
            }
            .domain-footer-image {
                position: relative;
                width: 100%;
                padding-bottom: 40px;
            }
            .domain-footer-image:after {
                content: "";
                position: absolute;
                background-image: url(https://up2client.com/envato/digital-invoica/main-file/assets/images/domain/footer-black.svg);
                background-repeat: no-repeat;
                width: calc(100% + 50px);
                height: 100%;
                z-index: 2;
                bottom: 0px;
                background-position: right bottom;
            }
            .domain-footer-image:before {
                content: "";
                position: absolute;
                background-image: url(https://up2client.com/envato/digital-invoica/main-file/assets/images/domain/footer-grey.svg);
                background-repeat: no-repeat;
                width: calc(100% + 50px);
                height: 100%;
                top: 0;
                z-index: 1;
                background-position: right;
            }
            .domain-footer-image > div:after {
                content: "";
                position: absolute;
                background-image: url(https://up2client.com/envato/digital-invoica/main-file/assets/images/domain/footer-orange.svg);
                background-repeat: no-repeat;
                width: calc(100% + 50px);
                height: 100%;
                z-index: 3;
                bottom: 0px;
                background-position: right bottom;
            }
            .domain-invoice .invoice-logo.invoice-logo-domain {
                padding-top: 30px;
                padding-bottom: 118px;
            }
            .invoice-logo-domain img {
                position: relative;
                z-index: 4;
                padding-left: 50px;
            }
            .domain-img {
                padding-top: 30px;
                padding-right: 50px;
            }
            .domain-invoice .invo-head-wrap {
                justify-content: space-between;
            }
            .domain-txt {
                color: #ff3f34;
                text-align: right;
                font-family: Inter;
                font-size: 40px;
                font-style: normal;
                font-weight: 400;
                line-height: 40px;
                letter-spacing: 6px;
            }
            .domain-color {
                color: #ff3f34;
            }
            .domain-invoice .booking-info:before {
                border-left: 2px solid #ff3f34;
            }
            .domain-invoice .booking-info .circle:before {
                background-color: #ff3f34;
            }
            .domain-detail-wrap {
                border: 2px solid #ff3f34;
                background: rgba(255, 63, 52, 0.06);
            }
            .domain-table thead tr th:first-child {
                text-align: left;
            }
            .domain-table thead tr th:nth-child(2) {
                text-align: left;
            }
            .domain-table thead tr th:last-child,
            .domain-table tbody tr td:last-child {
                text-align: right;
            }
            .domain-table thead tr th {
                padding-bottom: 10px;
            }
            .domain-detail-wrap {
                margin-top: 40px;
            }
        </style>

        <style>
            @media (max-width: 991px) {
                .container {
                    padding: 0 40px;
                }
                .coffee-triangle-image {
                    display: none;
                }
                .invoice-logo-content-coffee {
                    justify-content: space-between;
                }
                .ecommerce .bus-invo-date .width-30 {
                    width: auto;
                }
                .coffee-black {
                    width: 10%;
                }
                .brown-bg {
                    width: 100%;
                }
                .invo-head-content-coffee {
                    width: 60%;
                }
                .coffee-bottom-sec {
                    width: auto;
                }
                .coffee-bottom-contact {
                    width: 100%;
                }
                .header-top-coffee {
                    width: 100%;
                    padding-top: 30px;
                    padding-bottom: 20px;
                }
                .student-header {
                    padding: 30px 0 0 40px;
                }
                .coffee-txt {
                    text-align: center;
                }
                .invoice-logo-content-flight {
                    padding: 0 40px;
                }
                .student-txt {
                    padding-left: 50px;
                }
                .invoice-logo-domain img {
                    padding-left: 40px;
                }
                .car-invoice .car-header-img {
                    padding: 30px 40px 0 40px;
                }
                .domain-txt {
                    margin-top: 30px;
                }
                .domain-img {
                    padding-right: 40px;
                }
                .domain-invoice .invoice-logo-content-domain:before {
                    width: 100%;
                }
                .domain-owner {
                    margin-top: 40px;
                }
                .domain-detail-wrap {
                    margin-top: 0px;
                }
                .car-bottom-sec {
                    padding: 40px 40px 0;
                }
                .movie .invoice-logo-movie,
                .ecommerce-header {
                    padding: 30px 40px;
                }
                .stadium-header {
                    padding-left: 40px;
                }
                .movie .invo-bill-total.width-30 {
                    width: 100%;
                }
                .movie-col-left img {
                    width: 100%;
                }
                .hospital-txt {
                    font-size: 30px;
                }
                .hospital-header {
                    padding: 30px 40px;
                }
                .money-invoice .transfer-wrap {
                    padding-bottom: 0;
                }
                .agency-contact-sec {
                    padding: 15px 40px;
                }
                .restaurant-header {
                    padding: 0 40px;
                }
                .restaurant .invoice-owner-conte-wrap.pt-20 {
                    padding-top: 0;
                }
                .train-invoice .invoice-logo-content {
                    column-gap: 30px;
                    align-items: start;
                    padding-top: 30px;
                }
                .train-header {
                    padding-left: 40px;
                }
                .train-invoice .invoice-header-contact {
                    display: block;
                }
                .train-invoice .invo-cont-wrap:nth-child(2) {
                    padding-top: 20px;
                }
                .ecommerce .agency-contact-sec {
                    padding: 15px 40px;
                }
                .internet .invo-car-book-wrap1.mt {
                    margin-top: 0;
                }
                .internet-images {
                    padding-left: 40px;
                }
                .agency1 .invo-bill-total.width-30 {
                    width: 40%;
                }
                .bus-detail-sec {
                    margin-top: 0;
                }
                .travel-txt-bg {
                    letter-spacing: 20px;
                }
                .cleaning-svg {
                    width: 100%;
                }
                .photo-header-img,
                .photo-footer-sec-img img {
                    width: 100%;
                }
                .cleaning-header {
                    padding-left: 40px;
                }
                .cleaning-invoice .cleaning-img-bottom-sec-wrap {
                    padding-right: 40px;
                }
                .internet-content {
                    padding: 30px 40px 0;
                }
                .fitness-header-wrap {
                    border-radius: 0px 0px 0px 0px;
                    background: #12151c;
                    padding: 30px 0 30px 40px;
                }
                .fitness-contact-content {
                    width: auto;
                    column-gap: 20px;
                }
                .photostudio-table .sno-wid {
                    width: 8%;
                }
                .fitness-invoice-content {
                    padding: 10px 40px;
                }
                .travel-invoice .invo-bill-total {
                    width: 40%;
                }
                .content-min-width {
                    padding: 40px;
                }
                .md-lg-font {
                    font-size: 18px;
                }
                .invo-to-owner {
                    margin: 6px 0;
                }
                .invoice-table .serv-wid {
                    width: 16%;
                }
                .invoice-table .desc-wid {
                    width: 27%;
                }
                .invoice-table .qty-wid {
                    width: 6.333333%;
                }
                .invoice-table .pric-wid {
                    width: 5.33333%;
                }
                .invoice-table .tota-wid {
                    width: 10%;
                }
                .invo-buttons-wrap .invo-btns .download-btn {
                    padding: 12px 18px;
                }
                .invo-btns span {
                    padding-left: 6px;
                }
                .text-invoice {
                    background-size: 88%;
                }
                .content-min-width.bus-header {
                    padding: 20px 40px 0;
                }
                .invo-time-col {
                    width: auto;
                }
                .invoice-timing-wrap {
                    padding: 26px 0 30px;
                }
                .invo-note-wrap {
                    align-items: flex-start;
                }
                .bus-img svg {
                    width: auto;
                    height: 110px;
                }
                .thank-you-content {
                    padding-top: 40px;
                }
                .booking-content-wrap {
                    column-gap: 4px;
                }
                .item-wid {
                    width: 13%;
                }
                .money-detail-wrap {
                    margin: 40px 0;
                }
                .transfer-wrap {
                    padding: 0 0 40px 0;
                }
                .paid-out-title-wrap {
                    padding-top: 40px;
                }
                .left-money-transfer {
                    flex-wrap: wrap;
                    display: flex;
                }
                .transfer-detail-wrap {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }
                .movie-detail-col {
                    padding: 6px 6px;
                }
                .movie-details-wrap {
                    padding: 40px 0 0;
                    column-gap: 20px;
                }
                .hospital-table-wrap {
                    margin-top: 40px;
                }
                .table-wrapper.booker-table-wrap {
                    padding: 0;
                    margin: 0;
                }
                .invoice-header.stadium-header.content-min-width {
                    padding: 40px;
                }
                .invo-hotel-book-wrap {
                    padding-top: 40px;
                }
                .invo-hedaer-contact,
                .invo-hedaer-mail {
                    font-size: 16px;
                }
                .mt-30 {
                    margin-top: 20px;
                }
                .fitness-header .invoice-header-contact {
                    display: block;
                }
                .fitness-img img {
                    width: auto;
                    height: 120px;
                }
                .fitness-header {
                    width: 100%;
                }
                .photostudio-header {
                    padding: 30px 40px;
                }
                .flight-img img {
                    width: auto;
                    height: 100px;
                }
                .flight .invoice-timing-wrap.invoice-timing-wrap-flight {
                    padding-top: 30px;
                    padding-bottom: 0;
                }
                .invo-car-book-wrap.invo-car-book-wrap {
                    padding-bottom: 30px;
                    padding-top: 30px;
                }
                .car-invoice .invo-car-book-wrap.invo-car-book-wrap {
                    padding-bottom: 0;
                }
                .train-table-wrap {
                    margin-top: 30px;
                }
                .ecommerce-img-black {
                    right: -40px;
                }
                .pf-data {
                    padding-right: 0;
                }
                .invoice-logo-hotel {
                    width: auto;
                }
            }
            @media (max-width: 767px) {
                .pt-40 {
                    padding-top: 30px;
                }
                .car-invoice .bus-conta-mail-wrap.car-conta-mail-wrap {
                    padding-top: 0px;
                }
                .money-invoice .transfer-wrap {
                    padding-top: 0;
                }
                .restaurant .rest-payment-bill .payment-wrap {
                    padding: 0;
                }
                .invo-pay-to-wrap-photo {
                    width: auto;
                }
                .invoice-logo-content.bg-black {
                    padding: 30px 30px;
                }
                .bus-invoice .invo-bill-total.bus-invo-total {
                    width: 40%;
                }
                .bus-invoice .agency-bottom-content {
                    padding-bottom: 0;
                }
                .photostudio-table .sno-wid {
                    width: 12%;
                }
                .invoice-table {
                    white-space: pre-wrap;
                }
                .hotel-sub {
                    padding-left: 16px !important;
                }
                .thank-you-content {
                    padding-top: 30px;
                }
                .booking-info p {
                    margin: 5px 0;
                }
                .booking-info:before {
                    height: 30px;
                }
                .invoice-timing-wrap {
                    padding: 20px 0 22px;
                    justify-content: flex-start;
                    flex-wrap: wrap;
                }
                .bus-detail-wrap {
                    padding: 20px 20px;
                    gap: 16px 26px;
                }
                .bus-detail-col.border-bottom {
                    padding-bottom: 12px;
                }
                .bus-img svg {
                    width: auto;
                    height: 90px;
                }
                .hosp-back-img-two img {
                    width: 100%;
                    height: auto;
                    left: 0;
                }
                .hosp-back-img-one img {
                    width: 100%;
                    height: auto;
                    right: 0;
                }
                .payment-table-wrap.movie-detail-table-wrap {
                    overflow-x: auto;
                }
                .payment-table-wrap.movie-detail-table-wrap table {
                    width: 100%;
                    min-width: 550px;
                }
                .movie-detail-col .movie-name {
                    width: 108px;
                }
                .movie-col-left,
                .movie-col-right {
                    width: 100%;
                }
                .movie-img img {
                    width: 100%;
                    height: 100%;
                }
                .movie-details-wrap .movie-img {
                    margin: 0 auto;
                    text-align: center;
                }
                .payment-table-wrap.movie-detail-table-wrap {
                    margin-top: 30px;
                }
                .movie-details-wrap {
                    padding: 30px 0 0;
                }
                .invo-addition-wrap.movi-add-wrap .hotel-sub {
                    padding-left: 0px !important;
                }
                .movie-detail-col {
                    align-items: flex-start;
                }
                .invo-grand-total td {
                    font-size: 16px;
                    line-height: 22px;
                }
                .movie-col-right {
                    padding: 20px 0;
                }
                .rest-payment-bill table {
                    width: 100%;
                }
                .signature-wrap {
                    padding: 30px 0;
                    left: 0;
                }
                .rest-payment-bill {
                    display: flex;
                    flex-direction: column-reverse;
                    width: 100%;
                }
                .payment-wrap {
                    position: relative;
                }
                .sign-img img {
                    width: auto;
                    height: 100%;
                }
                .rest-payment-bill .payment-wrap {
                    padding: 0px 15px 0px 15px;
                }
                .rest-payment-bill .refund-days {
                    padding: 10px 0 10px 0px;
                }
                .rest-payment-bill .pay-type {
                    padding: 10px 10px 10px 0px;
                }
                .money-img img {
                    height: 100px;
                }
                .payment-wrap.payment-wrap-car {
                    width: 100%;
                }
                .bus-conta-mail-wrap.car-conta-mail-wrap {
                    padding-top: 30px;
                }
                .payment-wrap.payment-wrap-car {
                    margin-top: 0;
                }
                .train-table-wrap {
                    margin-top: 30px;
                }
                .domain-img img {
                    width: auto;
                    height: 120px;
                }
                .coffee-shop-img img {
                    width: auto;
                    height: 120px;
                }
                .cleaning-back-img-one img {
                    width: 100%;
                    height: auto;
                    right: 0;
                }
                .cleaning-back-img-two img {
                    width: 100%;
                    height: auto;
                    left: 0;
                }
            }
            @media (max-width: 600px) {
                .cleaning-svg,
                .cleaning-blue-img,
                .movie .invo-head-content {
                    display: none;
                }
                .domain-invoice .invoice-logo.invoice-logo-domain {
                    padding-top: 20px;
                }
                .coffee-black {
                    display: none;
                    width: auto;
                }
                .invoice-logo-coffee {
                    width: auto;
                }
                .invo-head-content-coffee {
                    width: auto;
                }
                .student .student-invoice-content {
                    display: none;
                }
                .student-logo-content {
                    width: 100%;
                }
                .domain-owner {
                    margin-top: 40px;
                }
                .domain-invoice .bus-detail-col {
                    display: block;
                }
                .domain-invoice .bus-type {
                    width: 100%;
                }
                .domain-invoice .invoice-logo-content-domain:before {
                    background-position: top right;
                }
                .car-invoice .invoice-logo.width-70,
                .car-invoice .invo-head-content.width-30 {
                    width: 50%;
                }
                .domain-owner {
                    margin-top: 30px;
                }
                .car-invoice .mon-send-left-data {
                    padding-right: 0;
                }
                .car-invoice .sign-img {
                    text-align: center;
                }
                .car-invoice .rest-payment-bill-fitness.pt-40 {
                    padding-top: 0;
                }
                .car-invoice .signature-wrap-fitness {
                    margin-bottom: 30px;
                }
                .car-invoice .mon-sent-content-wrap {
                    justify-content: space-between;
                }
                .footer-img1 img {
                    display: none;
                }
                .ecommerce .invoice-table .tota-wid {
                    width: 14%;
                }
                .flight-img1 img {
                    width: 100%;
                }
                .flight-thanks-bg {
                    width: 100%;
                }
                .stadium-invoice .invoice-logo.width-30,
                .stadium-invoice .stadium-title.width-70 {
                    width: 100%;
                }
                .flight-contact-mail-wrap {
                    column-gap: 30px;
                }
                .stadium-first {
                    flex-direction: column-reverse;
                }
                .stadium-first-sec,
                .stadium-second-sec,
                .stadium-table-total {
                    width: 100%;
                }
                .stadium-title {
                    padding: 30px 0 20px 20px;
                }
                .stadium-first-sec {
                    margin-top: 30px;
                }
                .stadium-second:before {
                    background: none;
                    position: relative;
                }
                .stadium-second {
                    margin-top: 0;
                }
                .movie .invoice-table .qty-wid {
                    width: auto;
                }
                .hospital-green-box {
                    display: none;
                }
                .movie-details-wrap {
                    display: block;
                }
                .hospital-contact-details {
                    justify-content: space-between;
                }
                .hospital-invoice .invo-to-wrap.width-70,
                .hospital-invoice .invo-pay-to-wrap.width-30 {
                    width: 50%;
                }
                .movie .invoice-logo-movie {
                    width: 100%;
                }
                .invo-head-wrap-hospital {
                    justify-content: flex-start;
                }
                .hospital-table-wrap {
                    margin-top: 30px;
                }
                .hospital-wid1 {
                    width: 12%;
                }
                .hospital-contact {
                    width: 100%;
                }
                .restaurant .res-no {
                    width: 12%;
                }
                .invo-head-content.invoice-logo-hotel-left {
                    display: none;
                }
                .invoice-logo-hotel {
                    width: 100%;
                }
                .invoice-logo-hotel a {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
                .travel-txt-bg {
                    letter-spacing: 16px;
                    font-size: 30px;
                }
                .details-width {
                    width: 30%;
                }
                .cleaning-invoice .width-30,
                .cleaning-invoice .width-70 {
                    width: 100%;
                }
                .fitness-contact-wrap {
                    display: block;
                    margin-top: 20px;
                }
                .fitness-sec {
                    flex-direction: column-reverse;
                }
                .fitness-contact-content {
                    position: relative;
                    margin-top: 20px;
                }
                .cleaning-txt {
                    margin-top: 30px;
                }
                .cleaning-invoice .invoice-to-content {
                    margin-top: 30px;
                }
                .cleaning-img-bottom-sec-wrap {
                    flex-direction: column-reverse;
                    padding-right: 40px;
                }
                .cleaning-invoice .invo-bill-total.bus-invo-total {
                    width: 40%;
                }
                .fitness .sign-img {
                    text-align: center;
                }
                .payment-wrap-fitness.width-50,
                .signature-wrap-fitness.width-30 {
                    width: 100%;
                }
                .payment-wrap-fitness.width-50 {
                    margin-top: 30px;
                }
                .travel-contact-sec {
                    padding: 15px 40px;
                }
                .travel-logo {
                    padding-left: 40px;
                    width: 50%;
                }
                .travel-bottom-sec-img img,
                .footer-img2 img {
                    width: 100%;
                }
                .travel-txt {
                    width: 50%;
                }
            }
            @media (max-width: 540px) {
                .agency-logo {
                    display: none;
                }
                .domain-invoice .invoice-logo.invoice-logo-domain {
                    padding-bottom: 20px;
                }
                .invoice-logo-domain img {
                    padding-left: 20px;
                }
                .invoice-logo-content.invoice-logo-content-domain {
                    flex-direction: row;
                }
                .coffee-txt {
                    display: none;
                }
                .header-top-coffee {
                    padding-top: 20px;
                }
                .domain-img {
                    padding-top: 50px;
                }
                .domain-footer-image > div:after,
                .domain-footer-image:before,
                .domain-footer-image:after {
                    width: calc(100% + 0px);
                }
                .invo-head-content-coffee {
                    width: 100%;
                    margin-top: 15px;
                    display: block;
                }
                .invo-head-content-coffee .invo-head-wrap {
                    justify-content: start;
                }
                .student-header {
                    padding: 30px 0 0 20px;
                }
                .car-invoice .invoice-logo-content {
                    display: block;
                }
                .car-invoice .car-bottom-sec {
                    padding: 40px 20px 0;
                }
                .car-invoice .bus-conta-mail-wrap {
                    padding: 0;
                }
                .car-invoice .car-header-img {
                    padding: 30px 20px 0 20px;
                }
                .car-txt {
                    display: none;
                }
                .fitness .invo-cont-wrap:last-child {
                    margin-top: 15px;
                }
                .ecommerce .invo-bill-total {
                    width: 100%;
                }
                .invoice-logo-content-flight {
                    padding: 0 20px;
                }
                .stadium-header {
                    padding-left: 20px;
                }
                .flight .invo-head-wra {
                    display: block;
                }
                .invoice-owner-conte-wrap {
                    flex-direction: column-reverse;
                }
                .flight .invo-head-wrap.invoi-date-wrap,
                .flight .invo-head-wrap {
                    display: flex;
                    justify-content: start;
                }
                .flight-txt {
                    text-align: left;
                }
                .stadium-invoice .book-table tbody tr:last-child td {
                    padding-bottom: 0;
                }
                .invo-addition-wrap.movi-add-wrap {
                    flex-direction: row;
                }
                .flight .invo-addition-wrap {
                    flex-direction: column-reverse;
                }
                .flight .invo-to-wrap {
                    padding-top: 20px;
                }
                .flight .invo-bill-total {
                    width: 100%;
                }
                .flight .bus-term-cond-content {
                    margin-top: 20px;
                }
                .hospital-invoice .payemnt-wid {
                    text-align: left;
                }
                .flight-thanks-bg {
                    padding: 10px;
                    background-color: #12151c;
                }
                .movie .invoice-logo-movie {
                    padding: 30px 20px;
                }
                .hospital-header {
                    padding: 30px 20px;
                }
                .stadium-invoice .invoice-logo-content {
                    display: flex;
                    flex-direction: row;
                }
                .money-header {
                    padding-top: 30px;
                }
                .money-invoice .invoice-logo-content {
                    flex-direction: row;
                }
                .restaurant-header {
                    padding: 0 20px;
                }
                .restaurant .invo-pay-to-wrap {
                    padding-top: 20px;
                }
                .agency1 .invoice-owner-conte-wrap {
                    column-gap: 30px;
                }
                .agency-contact-sec {
                    padding: 15px 20px;
                }
                .train-thanks-bg {
                    padding: 20px 10px;
                }
                .hotel .invoice-owner-conte-wrap,
                .restaurant .invoice-owner-conte-wrap,
                .bus-invoice .invoice-owner-conte-wrap,
                .money-invoice .invoice-owner-conte-wrap {
                    display: block;
                }
                .restaurant .invoice-logo-content {
                    flex-direction: row;
                }
                .hotel .invo-pay-to-wrap,
                .bus-invoice .invo-pay-to-wrap,
                .money-invoice .invo-pay-to-wrap {
                    padding-top: 20px;
                }
                .train-invoice .invo-pay-to-wrap {
                    margin-top: 20px;
                }
                .train-header-sec {
                    display: none;
                }
                .train-invoice .invoice-owner-conte-wrap {
                    display: block;
                }
                .train-header {
                    padding-left: 20px;
                    padding-right: 20px;
                }
                .ecommerce .agency-contact-sec {
                    padding: 15px 20px;
                }
                .ecommerce .invoice-owner-conte-wrap {
                    display: block;
                }
                .ecommerce-img-black {
                    right: -20px;
                }
                .ecommerce .invo-pay-to-wrap {
                    margin-top: 30px;
                }
                .internet-content {
                    padding: 30px 20px 0;
                }
                .internet-images {
                    padding-left: 20px;
                }
                .internet-invoice {
                    /*padding-bottom: 80px;*/
                }
                .travel-invoice .invo-bill-total {
                    width: 100%;
                }
                .invo-bill-total.invo-bill-total-internet {
                    width: 100%;
                }
                .travel-contact-sec {
                    padding: 15px 20px;
                }
                .travel-logo {
                    padding-left: 20px;
                }
                .fitness-invoice-content {
                    padding: 10px 20px;
                }
                .fitness-header-wrap {
                    padding: 30px 0 30px 20px;
                }
                .fitness .invo-add-info-content,
                .fitness .invo-bill-total {
                    width: 100%;
                }
                .fitness-contact-content {
                    display: block;
                }
                .cleaning-invoice .cleaning-img-bottom-sec-wrap {
                    padding-right: 20px;
                }
                .blue-img1-bottom img {
                    width: 100%;
                }
                .invo-head-wrap-clean {
                    justify-content: start;
                }
                .cleaning-header {
                    padding-left: 20px;
                }
                .cleaning-invoice .invo-bill-total.bus-invo-total {
                    width: 100%;
                }
                .cleaning-contact {
                    text-align: left;
                    padding-left: 20px;
                    margin-top: 30px;
                }
                .cleaning-invoice .invo-social-name {
                    padding-left: 0px;
                }
                .cleaning-invoice .term-condi-list.mt-30 {
                    margin-top: 0;
                }
                .invoice-txt {
                    text-align: center;
                }
                .invoice-logo-content.bg-black {
                    padding: 20px;
                }
                .agency1 .invo-head-wrap {
                    justify-content: left;
                }
                .bus-invoice .invo-bill-total.bus-invo-total {
                    width: 100%;
                }
                .bus-detail-col {
                    display: block;
                }
                .photo-txt {
                    text-align: left;
                    font-size: 34px;
                    line-height: 34px;
                }
                .invo-head-wrap.invo-head-wrap-photo {
                    justify-content: start;
                }
                .photostudio .invo-add-info-content,
                .photostudio .invo-bill-total {
                    width: 100%;
                }
                .photo-logo {
                    bottom: -10px;
                    right: 20px;
                }
            }
            @media (max-width: 500px) {
                .bus-invoice .bus-header-logo {
                    display: block;
                }
                .bus-conta-mail-wrap.coffee-conta-mail-wrap {
                    column-gap: 30px;
                }
                .internet-content {
                    padding: 20px 20px 0;
                }
                .coffee-mail {
                    padding-top: 15px;
                }
                .stadium-title {
                    display: none;
                }
                .flight-contact-mail-wrap {
                    display: block;
                }
                .flight .bus-invo-date.flight-mail {
                    margin-top: 15px;
                }
                .stadium-header {
                    padding-top: 30px;
                }
                .stadium-table {
                    display: block;
                }
                .stadium-table:nth-child(3) div:last-child,
                .stadium-table:last-child div:last-child {
                    padding-top: 0;
                }
                .hospital-contact-details {
                    display: block;
                }
                .restaurant .logo img {
                    width: 100%;
                }
                .hospital-contact-details .invo-cont-wrap:last-child {
                    margin-top: 15px;
                }
                .agency1 .invoice-owner-conte-wrap {
                    display: block;
                }
                .pt-40 {
                    padding-top: 20px;
                }
                .agency1 .invo-pay-to-wrap {
                    margin-top: 20px;
                }
                .internet-invoice {
                    padding-bottom: 60px;
                }
                .blue-img1-bottom img {
                    width: 100%;
                }
                .bus-txt {
                    text-align: left;
                    margin-top: 30px;
                }
                .bus-header-logo .wid-50 {
                    width: 100%;
                }
                .bus-invoice .invo-head-wrap {
                    justify-content: left;
                }
                .bus-detail-col {
                    display: block;
                }
                .travel-invoice .bus-invo-num-travel {
                    column-gap: 0;
                }
                .travel-invoice .travel-detail-wrap {
                    margin-top: 30px;
                }
                .internet .invoice-owner-conte-wrap {
                    flex-direction: column-reverse;
                }
                .internet .invo-pay-to-wrap,
                .internet .invo-to-wrap {
                    margin-top: 30px;
                }
                .hospital-invoice .invoice-owner-conte-wrap {
                    display: block;
                }
                .hospital-invoice .invo-pay-to-wrap {
                    margin-top: 20px;
                }
                .hospital-invoice .invo-to-wrap.width-70,
                .hospital-invoice .invo-pay-to-wrap.width-30 {
                    width: 100%;
                }
            }
            @media (max-width: 580px) {
                .movie-details-wrap {
                    flex-wrap: wrap;
                }
                .agency1 .invo-bill-total.width-30 {
                    width: 100%;
                }
                .pf-data {
                    padding-right: 0;
                }
                .student_header {
                    padding: 30px;
                }
                .mt-30 {
                    margin-top: 10px;
                }
                .coffee-shop-back-img-one img {
                    width: 500px;
                }
                .bus-type {
                    width: auto;
                }
                .bus-detail-col {
                    display: block;
                }
                .invoice-header-contact-photostudio {
                    display: block;
                }
                .ecommerce-header .invoice-header-contact {
                    display: block;
                }
                .detail-col-car1 {
                    width: 100%;
                }
            }
            @media (max-width: 575px) {
                .invoice-table {
                    width: 100%;
                    caption-side: bottom;
                    border-collapse: collapse;
                    min-width: 500px;
                }
                .table-wrapper.agency-service-table,
                .table-wrapper {
                    overflow-x: auto;
                }
                .invoice-logo-content {
                    flex-direction: column;
                    align-items: flex-start;
                }
                .invo-head-wrap.invoi-date-wrap {
                    margin-top: 2px;
                }
                .invo-head-content {
                    width: 100%;
                }
                .travel-logo-sec-wrap {
                    padding-bottom: 15px;
                }
                .travel-txt {
                    display: none;
                }
                .paid-out-title-wrap,
                .movie-col-right {
                    padding-top: 20px;
                }
                .content-min-width {
                    padding: 30px 20px;
                }
                .container {
                    padding: 0 20px;
                }
                .invo-to-wrap,
                .invo-pay-to-wrap {
                    width: 100%;
                    text-align: left;
                }
                .invo-owner-address {
                    line-height: 22px;
                }
                .invo-to-owner {
                    margin: 2px 0;
                    font-size: 16px;
                }
                .invoice-table td {
                    padding: 12px 0;
                }
                .invo-addition-wrap {
                    display: flex;
                    flex-wrap: wrap;
                    flex-direction: column;
                }
                .invo-add-info-content,
                .invo-bill-total,
                .movie-col-left,
                .movie-col-right,
                .rest-payment-bill table {
                    width: 100%;
                }
                .invo-add-info-content {
                    position: relative;
                    order: 2;
                    padding-top: 10px;
                }
                .invo-bill-total {
                    position: relative;
                    order: 1;
                }
                .hotel-sub {
                    padding-left: 0px !important;
                }
                .invo-bill-total table {
                    width: 100%;
                }
                .invo-total-table .tax-row td {
                    padding: 8px 0;
                }
                .addi-info-title {
                    margin: 0 0 4px;
                }
                .invo-note-wrap {
                    display: flex;
                    align-items: flex-start;
                }
                .note-desc {
                    font-size: 14px;
                    line-height: 20px;
                }
                .booking-info {
                    margin: 5px 0;
                }
                .content-min-width.bus-header .invoice-logo-content {
                    justify-content: space-between;
                    align-items: center;
                    flex-direction: row;
                }
                .content-min-width.bus-header .invoice-logo {
                    top: 0px;
                }
                .bus-detail-wrap .bus-type,
                .bus-detail-wrap .bus-tname {
                    width: 100%;
                    font-size: 14px;
                    line-height: 20px;
                }
                .invoice-table.bus-detail-table .sno-wid {
                    width: 14%;
                }
                .invoice-table.bus-detail-table .re-price-wid {
                    width: 6%;
                }
                .invoice-table.bus-detail-table .re-qty-wid {
                    width: 4%;
                }
                .invoice-table.bus-detail-table .tota-wid {
                    width: 3%;
                }
                .invoice-timing-wrap {
                    display: flex;
                    justify-content: space-between;
                    flex-wrap: wrap;
                }
                .booking-info:before {
                    height: 29px;
                }
                .bus-detail-wrap {
                    grid-template-columns: repeat(2, 1fr);
                }
                .bus-detail-col {
                    border-bottom: 1px solid #888888;
                }
                .money-detail-wrap {
                    margin: 30px 0;
                }
                .bus-detail-col.seat-col {
                    border-bottom: 1px solid #888888;
                    padding-bottom: 12px;
                }
                .bus-conta-mail-wrap {
                    flex-wrap: wrap;
                    padding: 20px;
                }
                .bus-contact a,
                .bus-mail a {
                    font-size: 16px;
                }
                .content-min-width.bus-header {
                    padding: 30px 20px;
                }
                .bus-img {
                    display: none;
                }
                .content-min-width.bus-header .invoice-logo {
                    top: 0;
                    margin: 0 auto;
                }
                .payment-table-wrap {
                    padding: 10px 10px;
                }
                .payemnt-wid,
                .date-wid,
                .trans-wid,
                .amount-wid {
                    font-size: 14px;
                    text-align: center;
                    padding: 10px 1px;
                }
                .invo-paye-row .payment-desc {
                    text-align: center;
                }
                .payment-desc {
                    padding: 10px 4px 10px;
                }
                .hospital-table-wrap {
                    margin-top: 30px;
                }
                .payment-table-wrap {
                    overflow-x: auto;
                }
                .invo-payment-table {
                    width: 100%;
                    caption-side: bottom;
                    border-collapse: collapse;
                    min-width: 300px;
                }
                .payment-table-wrap.hotel-booking-wrap .invo-payment-table {
                    min-width: 430px;
                }
                .invoice-table.hospital-table .sno-wid {
                    width: 4%;
                }
                .invo-book-detail {
                    display: flex;
                    flex-wrap: wrap;
                    flex-direction: column;
                }
                .invo-hotel-book-wrap {
                    padding-top: 30px;
                }
                .content-min-width.money-header {
                    padding: 24px 20px 24px;
                }
                .transfer-detail-wrap {
                    display: flex;
                    justify-content: space-between;
                    flex-wrap: wrap;
                }
                .left-money-transfer {
                    display: flex;
                    justify-content: flex-start;
                    width: 100%;
                    flex-wrap: wrap;
                }
                .left-money-top-row {
                    padding-right: 0px;
                    width: 100%;
                }
                .left-money-bottom-row,
                .mon-send-left-data,
                .mon-paid-left-data,
                .mon-send-right-data {
                    padding-right: 0;
                    width: 100%;
                }
                .content-min-width.money-header .invoice-logo-content {
                    flex-direction: row;
                    align-items: center;
                    justify-content: space-between;
                }
                .money-img img {
                    height: 70px;
                }
                .mon-exchange-rate {
                    padding-bottom: 10px;
                }
                .right-money-transfer {
                    margin-top: 20px;
                }
                .transfer-wrap {
                    padding: 0 0 30px 0;
                }
                .mon-sent-content-wrap {
                    flex-wrap: wrap;
                }
                .movie-details-wrap {
                    flex-wrap: wrap;
                }
                .movie-img img {
                    width: 100%;
                    height: 100%;
                }
                .movie-details-wrap .movie-img {
                    margin: 0 auto;
                    text-align: center;
                }
                .payment-table-wrap.movie-detail-table-wrap {
                    margin-top: 30px;
                }
                .movie-details-wrap {
                    padding: 30px 0 0;
                }
                .table-wrapper.movie-details-table-wrapper {
                    padding: 10px 0 0px;
                }
                .invo-addition-wrap.movi-add-wrap .hotel-sub {
                    padding-left: 0px !important;
                }
                .movie-detail-col {
                    align-items: flex-start;
                }
                .invo-grand-total td {
                    font-size: 16px;
                    line-height: 22px;
                }
                .invoice-table.booker-table .re-qty-wid,
                .invoice-table.booker-table .tota-wid {
                    width: 3%;
                }
                .invoice-table.booker-table .re-price-wid {
                    width: 10%;
                }
                .invoice-table.booker-table .sno-wid {
                    width: 6%;
                }
                .invoice-table.movie-table .re-desc-wid {
                    width: 22%;
                }
                .invoice-header.stadium-header .invoice-logo {
                    margin: 0 auto;
                    text-align: center;
                }
                .invoice-header.stadium-header.content-min-width {
                    padding: 34px 20px;
                }
                .invo-bill-total.bus-invo-total {
                    width: 100%;
                }
                .flight-img img {
                    display: none;
                }
                .ecommerce-img {
                    text-align: right;
                }
                .phtotstudio-img {
                    text-align: right;
                }
                .photostudio-header .invoice-logo-content {
                    flex-direction: row;
                }
                .invoice-logo-content.hide {
                    flex-direction: row;
                    align-items: center;
                }
                a.contact_focus,
                a.email_focus {
                    font-size: 16px;
                }
                .invoice-timing-wrap.invoice-timing-wrap-flight {
                    padding: 20px 0;
                }
                .invo-car-book-wrap.invo-car-book-wrap {
                    padding-bottom: 30px;
                    padding-top: 30px;
                }
                .ecommerce-header {
                    padding: 20px 20px;
                }
                #student_invoice {
                    padding: 0;
                }
                .pf-data {
                    padding-bottom: 30px;
                }
                .student_header .invoice-logo-content {
                    flex-direction: row;
                }
                .student_header
                    .invoice-header-contact.invoice-header-contact1 {
                    flex-direction: row;
                }
                .mt-30 {
                    margin-top: 10px;
                }
                .pf-data {
                    padding-bottom: 10px;
                }
                .coffee_header .invoice-logo-content {
                    display: flex;
                    flex-direction: row;
                    align-items: center;
                }
                .coffee-shop-img {
                    text-align: right;
                }
                .coffee_header {
                    padding: 0 0 0 20px;
                }
                .fitness-img {
                    text-align: right;
                }
                .photostudio-detail-wrap {
                    margin-top: 30px;
                }
                .invoice-table thead th.paddind-pt {
                    padding: 10px 17px;
                }
                .travel_header .invoice-logo {
                    margin: 0 auto;
                }
                .content-min-width.flight-header .invoice-logo {
                    margin: 0 auto;
                }
                .coffee-shop-back-img-one img {
                    display: none;
                }
                .p-0-coffee.mt {
                    margin-top: 0;
                }
                .coffee_header .invo-head-content {
                    padding-top: 0;
                }
            }
            @media (max-width: 475px) {
                .bus-img svg {
                    height: 80px;
                    margin-left: 18px;
                }
                .invoice-timing-wrap.invoice-timing-wrap-flight {
                    padding: 20px 0;
                }
                .fs {
                    font-size: 14px;
                }
                .invo-payment-table.invo-payment-table {
                    min-width: 480px;
                }
                .coffee-shop-back-img-one img {
                    width: 400px;
                }
                .fitness-img img {
                    width: auto;
                    height: 100px;
                }
                .bus-header-logo {
                    display: block;
                }
            }
            @media (max-width: 450px) {
                .pink-img {
                    width: 100%;
                }
                .domain-img,
                .domain-invoice .invoice-logo-content-domain:before,
                .domain-invoice .invoice-logo-content-domain:after,
                .domain-footer-image:after,
                .domain-footer-image > div:after,
                .domain-footer-image:before {
                    display: none;
                }
                .domain-invoice .invoice-logo.invoice-logo-domain:before {
                    background-color: #ff3f34;
                    background-image: none;
                }
                .domain-invoice .invoice-logo.invoice-logo-domain {
                    width: 100%;
                }
                .invo-add-info-content.invo-add-info-content-internet {
                    width: 100%;
                }
                .car-invoice .invoice-logo.width-70,
                .car-invoice .invo-head-content.width-30 {
                    width: 100%;
                }
                .invoice-logo-res {
                    display: none;
                }
                .car-invoice .invo-head-wrap {
                    justify-content: start;
                }
                .restaurant .invoice-logo-details.wid-50 {
                    width: 100%;
                    padding: 20px 0;
                }
                .movie .invoice-owner-conte-wrap {
                    display: block;
                }
                .movie .payment-table-wrap {
                    margin-top: 30px;
                }
                .res-contact {
                    padding-top: 15px;
                }
                .restaurant .logo img {
                    width: 100%;
                }
                .agency1 .invoice-header-contact,
                .hotel .invoice-header-contact,
                .money-invoice .invoice-header-contact {
                    display: block;
                }
                .money-invoice .agency-contact-sec {
                    margin-top: 30px;
                }
                .agency1 .invo-cont-wrap:last-child,
                .hotel .invo-cont-wrap:last-child,
                .money-invoice .invo-cont-wrap:last-child {
                    margin-top: 15px;
                }
                h1.ecommerce-txt {
                    font-size: 30px;
                }
                .ecommerce-img-black {
                    display: none;
                }
                .ecommerce .bus-invo-no-date-wrap {
                    width: 100%;
                }
                .ecommerce .invoice-header-contact {
                    display: block;
                }
                .bus-txt {
                    font-size: 32px;
                    margin-top: 20px;
                }
                .blue-img2-bottom {
                    display: none;
                }
                .cleaning-blue-img-bottom {
                    margin-top: 30px;
                }
                .travel-invoice .invoice-header-contact {
                    flex-wrap: wrap;
                }
                .bus-invo-no-date-wrap-travel .bus-invo-num-travel {
                    display: block;
                }
                .internet .invo-head-wrap {
                    display: block;
                }
                .internet .internet-invoice {
                    justify-content: space-between;
                    padding-bottom: 40px;
                }
            }
            @media (max-width: 390px) {
                .invo-note-wrap {
                    flex-wrap: wrap;
                    text-align: center;
                }
                .money-txt {
                    display: none;
                }
                .pink-bg {
                    background-image: none;
                }
                .restaurant .res-pay-table .pay-type {
                    padding: 12px;
                }
                .hotel .invoice-owner-conte-wrap.pt-20 {
                    padding-top: 0;
                }
                .note-desc {
                    padding: 6px 0 0 2px;
                }
                .booking-info.column-one:before {
                    height: 44px;
                }
                .movie-detail-col .movie-name,
                .movie-detail-col .movie-tname {
                    font-size: 14px;
                    line-height: 20px;
                }
                .fs {
                    line-height: 20px;
                }
                .detail-col-car {
                    padding: 10px;
                }
                .student_header
                    .invoice-header-contact.invoice-header-contact1 {
                    flex-direction: column;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                .coffee-shop-img img {
                    width: auto;
                    height: 90px;
                }
                .coffee-shop-back-img-one img {
                    width: 300px;
                }
                .domain-img img {
                    width: auto;
                    height: 80px;
                }
                h1.ecommerce-txt {
                    display: none;
                }
                .phtotstudio-img img {
                    display: none;
                }
                .fitness-img img {
                    display: none;
                }
                .black-footer-img-sec img,
                .black-footer-img-sec:before {
                    display: none;
                }
                .internet-images {
                    margin-top: 30px;
                    padding-bottom: 30px;
                }
            }
            @media (max-width: 340px) {
                .movie-name.show-name {
                    width: 100px;
                }
                .rest-payment-bill td {
                    font-size: 14px;
                    line-height: 20px;
                }
                .bus-detail-col {
                    border: none;
                }
                .bus-detail-wrap {
                    grid-template-columns: repeat(1, 1fr);
                }
                .fitness-img img {
                    display: none;
                }
                .phtotstudio-img img {
                    display: none;
                }
                .movie .invoice-logo-movie {
                    border-radius: 0 0px 0px 0px;
                }
                .signature-wrap-flight:before {
                    display: none;
                }
            }
        </style>
    </head>
    <body>
        <!--Invoice wrap start here -->
        <div class="invoice_wrap hotel">
            <div class="invoice-container">
                <div class="invoice-content-wrap" id="download_section">
                    <!--Header start here -->
                    <header class="hotel-header" id="invo_header">
                        <div class="invoice-logo-content pink-bg">
                            <div class="invoice-logo invoice-logo-hotel">
                                <a href="#" class="logo"
                                    ><img
                                        src="https://up2client.com/envato/digital-invoica/main-file/assets/images/hotel/logo.png"
                                        alt="this is a invoice logo"
                                /></a>
                            </div>
                            <div
                                class="invo-head-content invoice-logo-hotel-left"
                            >
                                <img
                                    src="https://up2client.com/envato/digital-invoica/main-file/assets/images/hotel/txt-img.png"
                                    class="txt-img"
                                    alt="txt-img"
                                />

                                {{-- <div class="invo-head-wrap">
                                    <div
                                        class="color-white font-md wid-40-hotel"
                                    >
                                        Invoice No:
                                    </div>
                                    <div
                                        class="font-md-grey color-white wid-20"
                                    >
                                        #DI56789
                                    </div>
                                </div> --}}

                                <div
                                    class="invo-head-wrap invoi-date-wrap invoi-date-wrap-agency"
                                >
                                    <div
                                        class="color-white font-md wid-40-hotel"
                                    >
                                        Invoice Date:
                                    </div>
                                    <div
                                        class="font-md-grey color-white wid-20"
                                    >
                                        {{ $order->created_at->format('d/m/Y') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!--Header end here -->
                    <!--Invoice content start here -->
                    <section
                        class="agency-service-content hotel-booking-content"
                        id="hotel_invoice"
                    >
                        <div class="container">
                            <!--Invoice owner name start here -->
                            <div class="invoice-owner-conte-wrap pt-20">
                                <div class="invo-to-wrap">
                                    <div class="invoice-to-content">
                                        <p class="font-md color-light-black">
                                            User Info:
                                        </p>
                                        <h1 class="font-lg color-purple pt-10">
                                        {{ $order->name }}

                                        </h1>
                                        <p
                                            class="font-md-grey color-grey pt-10"
                                        >
                                            Phone:  {{ $order->phone }}
                                            <br />
                                            Email: {{ $order->email }}
                                        </p>
                                    </div>
                                </div>
                                {{-- <div class="invo-pay-to-wrap">
                                    <div class="invoice-pay-content">
                                        <p class="font-md color-light-black">
                                            Hotel Details:
                                        </p>
                                        <h2 class="font-lg color-purple pt-10">
                                            Digital Invoico Star Hotel
                                        </h2>
                                        <p
                                            class="font-md-grey color-grey pt-10"
                                        >
                                            4510 E Dolphine St, IN 3526<br />
                                            Hills Road, New York, USA
                                        </p>
                                    </div>
                                </div> --}}
                            </div>

                            <!--Invoice owner name end here -->
                            <!--Booking information start here -->

                            {{-- <div class="invo-hotel-book-wrap pt-40">
                                <div class="booking-content-wrap">
                                    <div class="invo-book-detail detail-col">
                                        <span
                                            class="font-sm-700 color-light-black"
                                            >Booking ID:</span
                                        >
                                        <span class="font-sm">DIH56321</span>
                                    </div>
                                    <div class="invo-book-detail detail-col">
                                        <span
                                            class="font-sm-700 color-light-black"
                                            >Check In:</span
                                        >
                                        <span class="font-sm">30/11/2022</span>
                                    </div>
                                    <div class="invo-book-detail detail-col">
                                        <span
                                            class="font-sm-700 color-light-black"
                                            >Nights:</span
                                        >
                                        <span class="font-sm">3</span>
                                    </div>
                                </div>
                                <div class="booking-content-wrap second-row">
                                    <div class="invo-book-detail detail-col">
                                        <span
                                            class="font-sm-700 color-light-black"
                                            >Room No:</span
                                        >
                                        <span class="font-sm">101</span>
                                    </div>
                                    <div class="invo-book-detail detail-col">
                                        <span
                                            class="font-sm-700 color-light-black"
                                            >Check Out:</span
                                        >
                                        <span class="font-sm">02/12/2022</span>
                                    </div>
                                    <div class="invo-book-detail detail-col">
                                        <span
                                            class="font-sm-700 color-light-black"
                                            >Room Type:
                                        </span>
                                        <span class="font-sm">Delux</span>
                                    </div>
                                </div>
                            </div> --}}

                            <!--Booking information end here -->
                            <!--Invoice table data start here -->
                            <div class="table-wrapper pt-40">
                                <table class="invoice-table hotel-table">
                                    <thead>
                                        <tr class="invo-tb-header">
                                            <th
                                                class="font-md color-light-black item-wid pl-10"
                                            >
                                                Item
                                            </th>
                                           
                                            <th
                                                class="font-md color-light-black qty-wid text-center"
                                            >
                                                Quantity
                                            </th>

                                            <th
                                                class="font-md color-light-black qty-wid text-center"
                                            >
                                                Rate
                                            </th>

                                            <th
                                                class="font-md color-light-black tota-wid text-right"
                                            >
                                                Amount
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="invo-tb-body">


                                        <tr class="invo-tb-row">
                                            <td class="font-sm pl-10">
                                               {{ $order->product->title }}
                                            </td>
                                           
                                            <td class="font-sm text-center">
                                                {{ $order->quantity }}
                                            </td>

                                            <td class="font-sm text-center">
                                                {{ $order->quantity }} x €{{ $order->price }}
                                            </td>
                                            <td class="font-sm text-right">
                                               €{{ number_format($order->quantity * $order->price, 2) }}

                                            </td>
                                        </tr>
                                      
                                    </tbody>
                                </table>
                            </div>
                            <!--Invoice table data end here -->
                            <!--Invoice additional info start here -->
                            <div class="invo-addition-wrap pt-20" style="justify-content: end">
                                
                                <div class="invo-bill-total width-30">
                                    <table class="invo-total-table">
                                        <tbody>
                                            <tr>
                                                <td
                                                    class="font-md color-light-black"
                                                >
                                                    Sub Total:
                                                </td>
                                                <td
                                                    class="font-md-grey color-grey text-right"
                                                >
                                                    €{{ number_format($order->quantity * $order->price, 2) }}
                                                </td>
                                            </tr>
                                            <tr class="tax-row bottom-border">
                                                <td
                                                    class="font-md color-light-black"
                                                >
                                                   Shipping Tax
                                                    
                                                    
                                                </td>
                                                <td
                                                    class="font-md-grey color-grey text-right"
                                                >
                                                    €{{ number_format(35, 2) }}
                                                </td>
                                            </tr>
                                            <tr class="invo-grand-total">
                                                <td
                                                    class="font-18-700 color-purple pt-20"
                                                >
                                                    Grand Total:
                                                </td>
                                                <td
                                                    class="font-18-500 color-light-black text-right pt-20"
                                                >
                                                     €{{ number_format($order->total_price , 2) }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--Invoice additional info end here -->
                            <!--Payment detail table start here -->

                            {{-- <div class="payment-table-wrap hotel-booking-wrap">
                                <table class="invo-payment-table">
                                    <thead>
                                        <tr class="invo-tb-header">
                                            <th
                                                class="font-md color-light-black payemnt-wid"
                                            >
                                                Payment Details
                                            </th>
                                            <th
                                                class="font-md color-light-black date-wid"
                                            >
                                                Date
                                            </th>
                                            <th
                                                class="font-md color-light-black trans-wid"
                                            >
                                                Transaction ID
                                            </th>
                                            <th
                                                class="font-md color-light-black amount-wid text-right"
                                            >
                                                Amount
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="invo-paye-row">
                                            <td
                                                class="font-sm payment-desc second-color"
                                            >
                                                American Express
                                            </td>
                                            <td
                                                class="font-sm payment-desc second-color"
                                            >
                                                25/11/2022
                                            </td>
                                            <td
                                                class="font-sm payment-desc second-color"
                                            >
                                                TD52369815
                                            </td>
                                            <td
                                                class="font-sm payment-desc second-color text-right"
                                            >
                                                $1019.52
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> --}}

                            <!--Payment detail table end here -->
                        </div>
                        <!--Contact details start here -->
                        <div class="agency-contact-sec bg-black">
                            <div class="invoice-header-contact">
                                {{-- <div class="invo-cont-wrap invo-contact-wrap">
                                    <div class="invo-social-icon">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <g clip-path="url(#clip0_6_94)">
                                                <path
                                                    d="M5 4H9L11 9L8.5 10.5C9.57096 12.6715 11.3285 14.429 13.5 15.5L15 13L20 15V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21C14.0993 20.763 10.4202 19.1065 7.65683 16.3432C4.8935 13.5798 3.23705 9.90074 3 6C3 5.46957 3.21071 4.96086 3.58579 4.58579C3.96086 4.21071 4.46957 4 5 4"
                                                    stroke="white"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                                <path
                                                    d="M15 7C15.5304 7 16.0391 7.21071 16.4142 7.58579C16.7893 7.96086 17 8.46957 17 9"
                                                    stroke="white"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                                <path
                                                    d="M15 3C16.5913 3 18.1174 3.63214 19.2426 4.75736C20.3679 5.88258 21 7.4087 21 9"
                                                    stroke="white"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_6_94">
                                                    <rect
                                                        width="24"
                                                        height="24"
                                                        fill="white"
                                                    ></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="invo-social-name">
                                        <a
                                            href="tel:12345678899"
                                            class="font-18"
                                            >+1 234 567 8899</a
                                        >
                                    </div>
                                </div>
                                <div class="invo-cont-wrap">
                                    <div class="invo-social-icon">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <g clip-path="url(#clip0_6_108)">
                                                <path
                                                    d="M19 5H5C3.89543 5 3 5.89543 3 7V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V7C21 5.89543 20.1046 5 19 5Z"
                                                    stroke="white"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                                <path
                                                    d="M3 7L12 13L21 7"
                                                    stroke="white"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_6_108">
                                                    <rect
                                                        width="24"
                                                        height="24"
                                                        fill="white"
                                                    ></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="invo-social-name">
                                        <a
                                            href="mailto:contact@invoice.com"
                                            class="font-18"
                                            >contact@invoice.com</a
                                        >
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <!--Contact details end here -->
                    </section>
                    <!--Invoice content end here -->
                </div>
                <!--Bottom content start here -->
                <section
                    class="agency-bottom-content d-print-none"
                    id="agency_bottom"
                >
                    <!--Print-download content start here -->
                    <div class="invo-buttons-wrap">
                        <div class="invo-print-btn invo-btns">
                            <a
                                href="javascript:window.print()"
                                class="print-btn"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                >
                                    <g clip-path="url(#clip0_10_61)">
                                        <path
                                            d="M17 17H19C19.5304 17 20.0391 16.7893 20.4142 16.4142C20.7893 16.0391 21 15.5304 21 15V11C21 10.4696 20.7893 9.96086 20.4142 9.58579C20.0391 9.21071 19.5304 9 19 9H5C4.46957 9 3.96086 9.21071 3.58579 9.58579C3.21071 9.96086 3 10.4696 3 11V15C3 15.5304 3.21071 16.0391 3.58579 16.4142C3.96086 16.7893 4.46957 17 5 17H7"
                                            stroke="white"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path
                                            d="M17 9V5C17 4.46957 16.7893 3.96086 16.4142 3.58579C16.0391 3.21071 15.5304 3 15 3H9C8.46957 3 7.96086 3.21071 7.58579 3.58579C7.21071 3.96086 7 4.46957 7 5V9"
                                            stroke="white"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path
                                            d="M7 15C7 14.4696 7.21071 13.9609 7.58579 13.5858C7.96086 13.2107 8.46957 13 9 13H15C15.5304 13 16.0391 13.2107 16.4142 13.5858C16.7893 13.9609 17 14.4696 17 15V19C17 19.5304 16.7893 20.0391 16.4142 20.4142C16.0391 20.7893 15.5304 21 15 21H9C8.46957 21 7.96086 20.7893 7.58579 20.4142C7.21071 20.0391 7 19.5304 7 19V15Z"
                                            stroke="white"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_10_61">
                                            <rect
                                                width="24"
                                                height="24"
                                                fill="white"
                                            />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span class="inter-700 medium-font">Print</span>
                            </a>
                        </div>
                        {{-- <div class="invo-down-btn invo-btns">
                            <a class="download-btn" id="generatePDF">
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <g clip-path="url(#clip0_5_246)">
                                        <path
                                            d="M4 17V19C4 19.5304 4.21071 20.0391 4.58579 20.4142C4.96086 20.7893 5.46957 21 6 21H18C18.5304 21 19.0391 20.7893 19.4142 20.4142C19.7893 20.0391 20 19.5304 20 19V17"
                                            stroke="white"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path
                                            d="M7 11L12 16L17 11"
                                            stroke="white"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path
                                            d="M12 4V16"
                                            stroke="white"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5_246">
                                            <rect
                                                width="24"
                                                height="24"
                                                fill="white"
                                            />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span class="inter-700 medium-font"
                                    >Download</span
                                >
                            </a>
                        </div> --}}
                    </div>
                    <!--Print-download content end here -->
                    <!--Note content start here -->
                    <div class="invo-note-wrap">
                        <div class="note-title">
                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <g clip-path="url(#clip0_8_240)">
                                    <path
                                        d="M14 3V7C14 7.26522 14.1054 7.51957 14.2929 7.70711C14.4804 7.89464 14.7348 8 15 8H19"
                                        stroke="#12151C"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M17 21H7C6.46957 21 5.96086 20.7893 5.58579 20.4142C5.21071 20.0391 5 19.5304 5 19V5C5 4.46957 5.21071 3.96086 5.58579 3.58579C5.96086 3.21071 6.46957 3 7 3H14L19 8V19C19 19.5304 18.7893 20.0391 18.4142 20.4142C18.0391 20.7893 17.5304 21 17 21Z"
                                        stroke="#12151C"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M9 7H10"
                                        stroke="#12151C"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M9 13H15"
                                        stroke="#12151C"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M13 17H15"
                                        stroke="#12151C"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </g>
                                <defs>
                                    <clipPath id="clip0_8_240">
                                        <rect
                                            width="24"
                                            height="24"
                                            fill="white"
                                        />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span class="font-md color-light-black">Note:</span>
                        </div>
                        <h3 class="font-md-grey color-grey note-desc">
                            This is computer generated receipt and does not
                            require physical signature.
                        </h3>
                    </div>
                    <!--Note content end here -->
                </section>
                <!--Bottom content end here -->
            </div>
        </div>
        <!--Invoice wrap end here -->
        <script src="/js/jquery.min.js"></script>
        <script src="/js/jspdf.min.js"></script>
        <script src="/js/html2canvas.min.js"></script>
        <script src="/js/custom.js"></script>
    </body>
</html>
