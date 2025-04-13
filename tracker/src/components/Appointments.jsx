import React from 'react';

export default function Appointments() {
  // Static sample data for appointments
  const appointments = [
    { id: '12345', patient: 'John Doe', specialty: 'Cardiology', doctor: 'Dr. Sarah Khan', day: '2025-04-14', timeSlot: '10:00 AM', status: 'Confirmed' },
    { id: '67890', patient: 'Jane Smith', specialty: 'Dermatology', doctor: 'Dr. Ali Raza', day: '2025-04-15', timeSlot: '02:00 PM', status: 'Pending' },
    { id: '11223', patient: 'Mark Lee', specialty: 'Neurology', doctor: 'Dr. Maria Sheikh', day: '2025-04-16', timeSlot: '11:00 AM', status: 'Completed' },
  ];

  return (
    <div className="container py-5">
      <h2 className="text-center text-primary mb-4">List of Appointments</h2>
      
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
          {appointments.map((appointment) => (
            <tr key={appointment.id}>
              <td>{appointment.id}</td>
              <td>{appointment.patient}</td>
              <td>{appointment.specialty}</td>
              <td>{appointment.doctor}</td>
              <td>{appointment.day}</td>
              <td>{appointment.timeSlot}</td>
              <td>{appointment.status}</td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
}
