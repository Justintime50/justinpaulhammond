import "bootstrap";

import axios from "axios";
import pineapple from "pineapple-library/pineapple/dist/js/pineapple";

window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

window.pineapple = pineapple;
