import axios from 'axios';

let sprintf = require("sprintf-js").sprintf;

const GET_ALL_PRODUCTS_URL = 'api/v1/products';
const GET_CUSTOMER_ORDER_URL = 'api/v1/customer/order';

export function getAllProducts() {
    $.blockUI();
    return axios.get(sprintf(GET_ALL_PRODUCTS_URL), {})
        .then(function (response) {
            $.unblockUI();
            return response;
        }).catch(function (ex) {
            console.log('Some thing went wrong', ex)
        })
}

export function getCustomerOrder(pids) {
    $.blockUI();
    return axios.post(sprintf(GET_CUSTOMER_ORDER_URL), {
        param: pids
    })
        .then(function (response) {
            $.unblockUI();
            return response;
        }).catch(function (ex) {
            console.log('Some thing went wrong', ex)
        })
}