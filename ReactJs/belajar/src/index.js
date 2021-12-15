import React from 'react';
import ReactDOM from 'react-dom';
import 'bootstrap/dist/css/bootstrap.min.css';
import JsonApi from './JsonApi';
import Topbar from './Layout/Topbar'
// import Kognitif from './Map/Kognitif';
// import Petunjuk from './Map/Petunjuk';
// import App from './App';
// import TestingState from './TestingState';

ReactDOM.render(
  <React.StrictMode>
  <Topbar />
    <JsonApi />
  </React.StrictMode>,
  document.getElementById('root')
);


