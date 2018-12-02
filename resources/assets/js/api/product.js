import axios from 'axios';
let sprintf = require("sprintf-js").sprintf;

/**
 * API Urls
 *
 * @type {string}
 */
const GET_ALL_PRODUCTS_URL = 'api/v1/products';
const GET_CUSTOMER_ORDER_URL = 'api/v1/customer/orders';

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

/**
 *
 * @param pids
 * @returns {Promise<AxiosResponse<any> | never>}
 */
export function getCustomerOrder(pids) {
    $.blockUI();
    return axios.post(sprintf(GET_CUSTOMER_ORDER_URL),{pids})
        .then(function (response) {
            $.unblockUI();
            return response;
        }).catch(function (ex) {
            $.unblockUI();
            console.log('Some thing went wrong', ex)
        })
}