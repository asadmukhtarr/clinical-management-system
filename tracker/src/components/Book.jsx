import React from 'react'

export default function Book() {
  return (
    <div>
      <div className='container'>
        <div className='row'>
        <div className="col-lg-4">
      <form>
        <div className="card rounded-0 mt-3">
          <div className="card-header bg-primary text-white">
            <i className="fa fa-plus-circle"></i> Create New Appointment
          </div>
          <div className="card-body">
            {/* Select Patient */}
            <div className="form-group">
              <label>
                <i className="fa fa-user-circle"></i> Select Patient
              </label>
              <select name="patient" className="form-control rounded-0 mt-1">
                <option value="">Select Patient</option>
                <option value="1">John Doe</option>
                <option value="2">Jane Smith</option>
              </select>
            </div>

            {/* Select Specialty */}
            <div className="form-group mt-1">
              <label>
                <i className="fa fa-stethoscope"></i> Select Specialty
              </label>
              <select name="specialty" className="form-control rounded-0 mt-1">
                <option value="">Select Specialty</option>
                <option value="1">Cardiology</option>
                <option value="2">Dermatology</option>
              </select>
            </div>

            {/* Select Doctor */}
            <div className="form-group mt-1">
              <label>
                <i className="fa fa-user-md"></i> Select Doctor
              </label>
              <select name="doctor" className="form-control rounded-0 mt-1">
                <option value="">Select Doctor</option>
                <option value="1">Dr. Sarah Khan</option>
                <option value="2">Dr. Ali Raza</option>
              </select>
            </div>

            {/* Select Day */}
            <div className="form-group mt-1">
              <label>
                <i className="fa fa-calendar"></i> Select Day
              </label>
              <input type="date" name="day" className="form-control" />
            </div>

            {/* Select Time Slot */}
            <div className="form-group mt-1">
              <label>
                <i className="fa fa-clock"></i> Time Slot
              </label>
              <input type="time" name="dayslot" className="form-control" />
            </div>
          </div>

          {/* Submit Button */}
          <div className="card-footer">
            <button className="btn btn-danger btn-sm rounded-0 float-end">
              <i className="fa fa-arrow-right"></i> Create Appointment
            </button>
          </div>
        </div>
      </form>
    </div>
        </div>
      </div>
    </div>
  )
}
