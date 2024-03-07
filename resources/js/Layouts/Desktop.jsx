import React from 'react'
import Navbar from '../Desktop/Navbar'
import { createRoot } from 'react-dom/client';
import List from '../Desktop/List';
import Widget from '../Desktop/Widget';

const Desktop = () => {
  return (
    <div>
        <Navbar/>

        <div className="d-flex justify-content-around">
          <div className="">
            <Widget/>
          </div>
          <div className="">
            <List/>
          </div>
        </div>

    </div>
  )
}

export default Desktop

const rootElement = document.getElementById('desktop');
const root = createRoot(rootElement);

root.render(<Desktop />);