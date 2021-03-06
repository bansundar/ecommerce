import axios from 'axios';
let sprintf = require("sprintf-js").sprintf;

/**
 * Component to Define API URLS for Products
 *
 * @type {string}
 */
const GET_ALL_PRODUCTS_URL = 'api/v1/products';

/**
 *
 * @returns {Promise<AxiosResponse<any> | never>}
 */
export function getAllProducts() {
    $.blockUI(); //block UI
    return axios.get(sprintf(GET_ALL_PRODUCTS_URL), {})
        .then(function (response) {
            $.unblockUI();  //Unblock UI
            return response;
        }).catch(function (ex) {
            $.unblockUI();
            console.log('Some thing went wrong', ex)
        })
}

