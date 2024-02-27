import React from 'react';
import { createRoot } from 'react-dom/client';

function Prueba() {
 return (
   <div className="container mt-5">
     <div className="row justify-content-center">
       <div className="col-md-8">
         <div className="card text-center">
           <div className="card-header"><h2>React Component in Laravel</h2></div>
           <div className="card-body">Thanks guys! Integrating react in Laravel is hard!</div>
         </div>
       </div>
     </div>
   </div>
 );
}
export default Prueba;

const rootElement = document.getElementById('prueba')
const root = createRoot(rootElement);

root.render(<Prueba />);