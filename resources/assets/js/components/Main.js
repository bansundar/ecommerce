import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import Header from './Header/Header';
import Footer from '../components/Footer/Footer';
import Product from '../components/Product/Index';

export default class Main extends Component {
    render() {
        return (
            <div className="container">
                <Header/>
                <Product/>
                <Footer/>
            </div>
        );
    }
}

if (document.getElementById('app')) {
    ReactDOM.render(<Main/>, document.getElementById('app'));
}
