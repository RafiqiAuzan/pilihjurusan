export function setTimezone(exdays) {
    let cname = "tz";
    let timezone = async function () {
        return getCookie(cname);
    };
    timezone().then((response) =>
        (function () {
            if (Intl.DateTimeFormat().resolvedOptions().timeZone !== response) {
                setCookie(
                    cname,
                    Intl.DateTimeFormat().resolvedOptions().timeZone,
                    exdays
                );
                location.reload();
            }
        })()
    );
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(";");
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == " ") {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return null;
}

function setCookie(cname, value, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + value + ";" + expires + ";path=/";
}
