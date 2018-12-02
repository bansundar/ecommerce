import React, {Component} from 'react';
import {getCustomerOrder} from '../../../api/product';


let pids = [];

class ListProducts extends Component {

    constructor(props) {
        super(props);

        this.handleInputChange = this.handleInputChange.bind(this);
    }

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
        console.log(pids, 'dd');
    }

    submitOrder(e) {
        e.preventDefault();

        if (pids.length === 0) {
            alert('empty');
        } else {
            getCustomerOrder(pids).then(response => {

            });
        }
    }

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
                                <th>Edit</th>
                                <th>Delete</th>
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
                                    <td>
                                        <p data-placement="top" data-toggle="tooltip" title="Edit">
                                            <button className="btn btn-primary btn-xs" data-title="Edit"
                                                    data-toggle="modal"
                                                    data-target="#edit"><span
                                                className="glyphicon glyphicon-pencil"/>
                                            </button>
                                        </p>
                                    </td>
                                    <td>
                                        <p data-placement="top" data-toggle="tooltip" title="Delete">
                                            <button className="btn btn-danger btn-xs" data-title="Delete"
                                                    data-toggle="modal"
                                                    data-target="#delete"><span
                                                className="glyphicon glyphicon-trash"/>
                                            </button>
                                        </p>
                                    </td>
                                </tr>
                            ))}
                            </tbody>
                        </table>
                        <button onClick={(e) => this.submitOrder(e)} type="button"
                                className="btn btn-default pull-right">Place Order
                        </button>
                    </form>
                </div>
            </div>
        );
    }
}

export default ListProducts;