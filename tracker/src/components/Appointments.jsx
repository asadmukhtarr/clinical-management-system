import React from 'react';
import { useState,useEffect } from 'react';

export default function Appointments() {
  const [appointment,setappointment] = useState([]);
  const [loading,setloading] = useState(false);
  // Static sample data for appointments
  async function fetch_appointment(){
    const response = await fetch('http://localhost:8000/api/appointments');
    const data = await response.json();
    if(data){
      setappointment(data);
      setloading(true);
    }
  }
  // useEffect ...
  useEffect(function(){
    fetch_appointment();
  });

  return (
    <div className="container py-5">
      <h2 className="text-center text-primary mb-4">List of Appointments</h2>
      { !loading ? (
            <div className="text-center my-5">
              <i className="fa fa-spinner fa-spin fa-2x text-danger"></i>
            </div>
          ):(
        <table className="table table-bordered table-hover">
          <thead className="table-danger">
            <tr>
              <th>Appointment ID</th>
              <th>Patient</th>
              <th>Specialty</th>
              <th>Doctor</th>
              <th>Day</th>
              <th>Time Slot</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
              { appointment.map((appointment) => (
                  <tr key={appointment.id}>
                    <td>{appointment.id}</td>
                    <td>{appointment.patient.name}</td>
                    <td>{appointment.specialities.title}</td>
                    <td>{appointment.doctor.name}</td>
                    <td>{appointment.day}</td>
                    <td>{appointment.slot}</td>
                    <td>{appointment.status}</td>
                  </tr>
              )) }
          </tbody>
        </table>
      )}
    </div>
  );
}
