import axios from 'axios';
let sprintf = require("sprintf-js").sprintf;

/**
 * Component to Define API URLS for Customer Orders
 *
 * @type {string}
 */
const GET_CUSTOMER_ORDER_URL = 'api/v1/customer/orders';

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