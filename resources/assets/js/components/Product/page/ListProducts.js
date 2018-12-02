import React, {Component} from 'react';

class ListProducts extends Component {
    render() {
        return (

                <div className="col-md-6">
                    <h4>List of the Products</h4>
                    <div className="table-responsive">
                        <table id="mytable" className="table table-bordred table-striped">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Weight</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><input type="checkbox" className="checkthis" /></td>
                                <td>Mohsin</td>
                                <td>5</td>
                                <td>6</td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button className="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span className="glyphicon glyphicon-pencil"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button className="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span className="glyphicon glyphicon-trash"></span></button></p></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        );
    }
}


export default ListProducts;