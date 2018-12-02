import React, {Component} from 'react';
import ListProducts from '../Product/page/ListProducts';
import {getAllProducts} from "../../api/product";

class Index extends Component {

    constructor(props) {
        super(props);
        this.state = {
            products: {}
        };
    }

    componentDidMount() {
        getAllProducts().then(response => {
            if ('SUCCESS' === response.data.response) {
                this.setState({
                    products: response.data.products
                })
            }
        });
    }

    render() {
        return (
            <div className="row product-page">
                <ListProducts products={this.state.products}/>
            </div>
        );
    }
}

export default Index;