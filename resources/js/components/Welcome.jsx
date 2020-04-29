import React from 'react';

class Welcome extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            time: new Date().toLocaleTimeString()
        };
    }

    tick() {
        this.setState({
            time: new Date().toLocaleTimeString()
        });
    }

    componentDidMount() {
        this.timer = setInterval(
            () => this.tick(),
            1000
        );
    }

    componentWillUnmount() {
        clearInterval(this.timer);
    }

    render() {
        return (
            <p>Hello, this is Welcome Component, {this.state.time}</p>
        );
    }
}

export default Welcome;