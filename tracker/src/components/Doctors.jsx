import React from 'react';

export default function Doctors() {
  return (
    <div className="container py-5">
      <h2 className="text-center text-primary mb-4">Our Doctors</h2>
      <div className="row g-4">
        {/* Doctor 1 */}
        <div className="col-md-4">
          <div className="card h-100 text-center">
            <div className="card-body">
              <img
                src="https://images.pexels.com/photos/8460047/pexels-photo-8460047.jpeg?auto=compress&cs=tinysrgb&h=500"
                alt="Dr. Sarah Khan"
                className="rounded-circle img-fluid mb-3"
                style={{ width: '150px', height: '150px', objectFit: 'cover' }}
              />
              <h5 className="card-title">Dr. Sarah Khan</h5>
              <p className="card-text">Cardiologist</p>
            </div>
          </div>
        </div>

        {/* Doctor 2 */}
        <div className="col-md-4">
          <div className="card h-100 text-center">
            <div className="card-body">
              <img
                src="https://images.pexels.com/photos/8376293/pexels-photo-8376293.jpeg?auto=compress&cs=tinysrgb&h=500"
                alt="Dr. Ali Raza"
                className="rounded-circle img-fluid mb-3"
                style={{ width: '150px', height: '150px', objectFit: 'cover' }}
              />
              <h5 className="card-title">Dr. Ali Raza</h5>
              <p className="card-text">Dermatologist</p>
            </div>
          </div>
        </div>

        {/* Doctor 3 */}
        <div className="col-md-4">
          <div className="card h-100 text-center">
            <div className="card-body">
              <img
                src="https://images.pexels.com/photos/8376177/pexels-photo-8376177.jpeg?auto=compress&cs=tinysrgb&h=500"
                alt="Dr. Maria Sheikh"
                className="rounded-circle img-fluid mb-3"
                style={{ width: '150px', height: '150px', objectFit: 'cover' }}
              />
              <h5 className="card-title">Dr. Maria Sheikh</h5>
              <p className="card-text">Neurologist</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}
