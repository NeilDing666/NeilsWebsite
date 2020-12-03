import React from 'react';
import ReactDOM from 'react-dom';

function App() {
    const time = new Date();
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Example Component</div>
                        {time.toLocaleTimeString()}
                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default App;

function tick(){
    if (document.getElementById('example')) {
        ReactDOM.render(<App />, document.getElementById('example'));
    }
}

setInterval(tick, 1000);