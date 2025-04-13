import React from 'react';

export default function Track() {
  return (
    <div className="container py-5">
      <h2 className="text-center text-primary mb-4">Track Your Appointment</h2>
      
      {/* Appointment Tracking Form */}
      <div className="row justify-content-center">
        <div className="col-lg-6">
          <div className="card rounded-0">
            <div className="card-header bg-danger text-white">
              <i className="fa fa-search"></i> Track Appointment
            </div>
            <div className="card-body">
              <form>
                <div className="form-group">
                  <label htmlFor="appointmentId">
                    <i className="fa fa-id-card"></i> Appointment ID
                  </label>
                  <input
                    type="text"
                    name="appointmentId"
                    id="appointmentId"
                    className="form-control rounded-0 mt-1"
                    placeholder="Enter Appointment ID"
                  />
                </div>

                {/* Track Button */}
                <div className="form-group mt-3">
                  <button
                    type="submit"
                    className="btn btn-danger btn-sm rounded-0 float-end"
                  >
                    <i className="fa fa-search"></i> Track Appointment
                  </button>
                </div>
              </form>

              {/* Static Result (Just for demo purposes) */}
              <div className="mt-3">
                <p>Your appointment is <strong>Confirmed</strong>.</p>
                {/* You can replace the status with static values */}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}
