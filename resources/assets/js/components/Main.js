import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class Main extends Component {
    constructor() {

        super();
        //Initialize the state in the constructor
        this.state = {
            authors: [],
        }
    }
    /*componentDidMount() is a lifecycle method
     * that gets called after the component is rendered
     */
    componentDidMount() {
        /* fetch API in action */
        fetch('/api/authors')
            .then(response => {
                return response.json();
            })
            .then(authors => {
                //Fetched product is stored in the state
                this.setState({ authors });
            });
    }

    renderProducts() {
        return this.state.authors.map(author => {
            return (
                /* When using list you need to specify a key
                 * attribute that is unique for each list item
                */
                <li key={author.id} >
                    { author.name }
                </li>
            );
        })
    }

    render() {
        /* Some css code has been removed for brevity */
        return (
            <div>
                <ul>
                    { this.renderProducts() }
                </ul>
            </div>

        );
    }
}

export default Main;

if (document.getElementById('root')) {
    ReactDOM.render(<Main />, document.getElementById('root'));
}
