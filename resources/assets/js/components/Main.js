import ReactDOM from 'react-dom';
import React, {Component} from 'react';
import Product from '../components/Product/Index';

/**
 * This page is render First when application is load
 *
 */
export default class Main extends Component {
    render() {
        return (
            <div className="container">
                <Product/>
            </div>
        );
    }
}

if (document.getElementById('app')) {
    ReactDOM.render(<Main/>, document.getElementById('app'));
}
