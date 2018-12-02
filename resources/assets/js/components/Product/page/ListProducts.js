import React, {Component} from 'react';
import OrderList from '../../Order/OrderList';
import {getCustomerOrder} from '../../../api/product';

/**
 *
 * @type {Array}
 */
let pids = [];

class ListProducts extends Component {

    /**
     * Constructor
     *
     * @param props
     */
    constructor(props) {
        super(props);
        this.state={
            orderList:false,
            orders:[]
        };
        this.handleInputChange = this.handleInputChange.bind(this);
    }

    /**
     * This function handle the check box value
     *
     * @param e
     */

    handleInputChange(e) {
        const target = e.target;
        if (target.type === 'checkbox') {

            let product_id = target.value;
            let index = pids.indexOf(product_id);

            if (index !== -1) {
                pids.splice(index, 1);
            } else {
                pids.push(product_id);
            }

        } else {
            console.log('This is not a checkbox');
        }
        console.log(pids, 'product_ids');
    }

    /**
     * This function is used to submit the products in order
     *
     * @param e
     */
    submitOrder(e) {
        e.preventDefault();

        if (pids.length === 0) {
            alert('empty');
        } else {
            getCustomerOrder(pids).then(response => {
                if ('SUCCESS' === response.data.response) {
                    this.setState({
                        orders: response.data.orders,
                        orderList:true
                    })
                }
            });
        }
    }

    /**
     * Renders the view
     *
     * @returns {*}
     */
    render() {

        let productData = this.props.products;
        let products = [];
        if (productData != null && productData.length > 0) {
            products = productData;
        }

        return (
            <div className="col-md-12">
                <h4>List of the Products</h4>
                <div className="table-responsive">
                    <form>
                        <table id="mytable" className="table table-bordred table-striped">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Product Name</th>
                                <th>Price($)</th>
                                <th>Weight(gm)</th>

                            </tr>
                            </thead>
                            <tbody>

                            {products.map((product, index) => (
                                <tr key={index}>
                                    <td><input
                                        type="checkbox"
                                        className="check-box"
                                        name={product.name}
                                        value={product.id}
                                        onChange={(e) => this.handleInputChange(e)}/>
                                    </td>
                                    <td>{product.name}</td>
                                    <td>{product.price}</td>
                                    <td>{product.weight}</td>
                                </tr>
                            ))}
                            </tbody>
                        </table>
                        <button onClick={(e) => this.submitOrder(e)} type="button"
                                className="btn btn-default pull-right">Place Order
                        </button>
                    </form>
                </div>

                {this.state.orderList && <OrderList orders={this.state.orders}/>}

            </div>
        );
    }
}

export default ListProducts;