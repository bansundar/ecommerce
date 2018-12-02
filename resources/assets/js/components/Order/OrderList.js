import React from 'react';

/**
 *
 * @param props
 * @returns {*}
 * @constructor
 */
const OrderList = (props) => {
    return (
        <div className="row">
            <div className="col-md-12">
                {props.orders.map((order, index) => (
                <ul className="list-group" key={index}>
                    <h3>Package {index+1}</h3>
                    <li className="list-group-item">Items: {order.items}</li>
                    <li className="list-group-item">Courier Price: {order.courierPrice}</li>
                    <li className="list-group-item">Total Price: {order.price}</li>
                    <li className="list-group-item">Total Weight: {order.totalWeight}</li>

                </ul>
                ))}
            </div>
        </div>
    )
};

export default OrderList;
