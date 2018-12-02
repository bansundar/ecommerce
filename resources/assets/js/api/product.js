import axios from 'axios';
let sprintf = require("sprintf-js").sprintf;

const GET_ALL_PRODUCTS_URL='api/v1/products';

export function getAllProducts() {
    $.blockUI();
    return axios.get(sprintf(GET_ALL_PRODUCTS_URL), {
    })
        .then(function (response) {
            $.unblockUI();
            return response;
        }).catch(function (ex) {
            console.log('Some thing went wrong', ex)
        })
}