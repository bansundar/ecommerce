import React, {Component} from 'react';
import ListProducts from '../Product/page/ListProducts';
import {getAllProducts} from "../../api/product";

class Index extends Component {

    constructor(props) {
        super(props);
        this.state={

        };
    }

    componentDidMount(){
        getAllProducts().then(response => {
            if ('SUCCESS' === response.data.response) {

            }
        });
    }

    render() {
        return (
            <div className="row product-page">
                <ListProducts/>
                <div className="col-md-6">
                    Place Order
                </div>
            </div>
        );
    }
}

export default Index;