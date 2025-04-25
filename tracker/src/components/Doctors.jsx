import React from 'react';
import Doctor from './includes/Doctor';
import { useState,useEffect } from 'react';

export default function Doctors() {
  const [doctors,setDoctors] = useState([]);
  //     {
  //       img: 'https://images.pexels.com/photos/8460047/pexels-photo-8460047.jpeg?auto=compress&cs=tinysrgb&h=500',
  //       name:'Dr Asad Mukhtar',
  //       specialist: 'Heart Specialist'
  //     },
  //     {
  //       img: 'https://images.pexels.com/photos/8460047/pexels-photo-8460047.jpeg?auto=compress&cs=tinysrgb&h=500',
  //       name:'Dr Ch Talha',
  //       specialist: 'Heart Specialist'
  //     },
  //     {
  //       img: 'https://images.pexels.com/photos/8460047/pexels-photo-8460047.jpeg?auto=compress&cs=tinysrgb&h=500',
  //       name:'Dr Abdul Hannan',
  //       specialist: 'Heart Specialist'
  //     },
  //     {
  //       img: 'https://images.pexels.com/photos/8460047/pexels-photo-8460047.jpeg?auto=compress&cs=tinysrgb&h=500',
  //       name:'Dr Kanwal',
  //       specialist: 'Heart Specialist'
  //     },
  //     {
  //       img: 'https://images.pexels.com/photos/8460047/pexels-photo-8460047.jpeg?auto=compress&cs=tinysrgb&h=500',
  //       name:'Dr Adeel',
  //       specialist: 'Heart Specialist'
  //     },
  // ];
  async function fetchDoctor (){
    const response = await fetch("http://localhost:8000/api/doctors");
    const data = await response.json();
    setDoctors(data);
  }
  useEffect(function(){
    fetchDoctor();
  });
  return (
    <div className="container py-5">
      <h2 className="text-center text-primary mb-4">Our Doctors</h2>
      <div className="row g-4">
          {
            doctors.map((doctor,index) => (
              <div className='col-md-4' key={index}>
                <Doctor doctor={doctor} />
              </div>
            ))
          }
      </div>
    </div>
  );
}
