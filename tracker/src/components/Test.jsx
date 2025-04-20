import React from 'react'
import { useState, useEffect } from 'react';
export default function Test() {
    const [count,setCount] = useState(0);
    const [name,setName] = useState();
    const [email,setemail] = useState();
    const [paragraph,setparagraph] = useState();
    const saveme = () => {
        const user = {
            name:name,
            email:email
        }
            console.log(user);
    }
    const incount = () => {
        var n = count + 1;
        setCount(n);
    }
    const fetchData = () => {
        setparagraph("In Bootstrap 5, you can use border utility classes to quickly style borders on elements. Here’s a breakdown of the main ones, In Bootstrap 5, you can use border utility classes to quickly style borders on elements. Here’s a breakdown of the main ones.");
    }
    useEffect(function(){
        fetchData();
    });
  return (
    <div>
        <div className='container mt-4'>
            <h2>This Component Is For Testing</h2>
            <h2>State Expaination</h2>
            <div className='row'>
                <div className='col-lg-6 border border-primary p-2'>
                    <h3>Counter Is: {count}</h3>
                    <button className='btn btn-danger btn-sm' onClick={incount}>+</button>
                    <button className='btn btn-danger btn-sm m-1' onClick={() => setCount(count-1)}>-</button>
                    <button className='btn btn-success btn-sm m-1' onClick={() => setCount(0)}>Rest</button>
                    <h3>Counter Is: {count}</h3>
                </div>
                <div className='col-lg-6 border border-primary p-2'>
                    <h3>Input Example</h3>
                    <div className='card rounded-0'>
                        <div className='card-header'>
                            Login Here
                        </div>
                        <div className='card-body'>
                            Name
                            <input type="text" className="form-control rounded-0" onKeyUp={(e) => setName(e.target.value)} />
                            Email
                            <input type="text" className="form-control rounded-0" onKeyUp={(e) => setemail(e.target.value)} />
                            <br />
                            <button className='btn btn-danger float-end' onClick={saveme}>Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <h2>UseEffect Hook :</h2>
            <div className="row">
                <div className='col-lg-12 border border-primary p-4'>
                        <h2>Paraghraph state value is</h2>
                        <p>{paragraph}</p>
                </div>
            </div>
        </div>
    </div>
  )
}
