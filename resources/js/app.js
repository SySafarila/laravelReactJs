import React from 'react';
import ReactDOM from 'react-dom';

import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link
} from 'react-router-dom';

import Example from './components/Example';
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// require('./components/Example');

// ReactDOM.render(
//     <Example />,
//     document.getElementById('root')
// );

function App() {
    return (
      <Router>
        <div>
          <nav>
            <ul>
              <li>
                <Link to="/">Home</Link>
              </li>
              <li>
                <Link to="/example">Example</Link>
              </li>
              <li>
                <Link to="/users">Users</Link>
              </li>
            </ul>
          </nav>
  
          {/* A <Switch> looks through its children <Route>s and
              renders the first one that matches the current URL. */}
          <Switch>
            <Route path="/example">
              <Example />
            </Route>
            <Route path="/users">
              <Users />
            </Route>
            <Route path="/">
              <Home />
            </Route>
          </Switch>
        </div>
      </Router>
    );
  }
  
  function Home() {
    return <h2>Home</h2>;
  }
  
  function About() {
    return <h2>About</h2>;
  }
  
  function Users() {
    return <h2>Users</h2>;
  }
  
ReactDOM.render(
    <App />,
    document.getElementById('root')
);