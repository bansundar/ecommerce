import React, {Component} from 'react';
import ListProducts from '../Product/page/ListProducts';
import {getAllProducts} from "../../api/product";

class Index extends Component {
    /**
     * Constructor
     *
     * @param props
     */
    constructor(props) {
        super(props);
        this.state = {
            products: {}
        };
    }

    /**
     * This function is called when render this component
     *
     * React Function
     */
    componentDidMount() {
        getAllProducts().then(response => {
            if ('SUCCESS' === response.data.response) {
                this.setState({
                    products: response.data.products
                })
            }
        });
    }

    /**
     * Render View of Products Lists
     *
     * @returns {*}
     */
    render() {
        return (
            <div className="row product-page">
                <ListProducts products={this.state.products}/>
            </div>
        );
    }
}

export default Index;