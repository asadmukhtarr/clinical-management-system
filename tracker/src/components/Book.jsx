import React from 'react'
import { useState,useEffect } from 'react'

export default function Book() {
  const[name,setName] = useState();
  const [whatsapp,setWhatsapp] = useState();
  const [specialty,setSpeciality] = useState();
  const [doctor,setDoctor] = useState();
  const [day,setDay] = useState();
  const [time,setTime] = useState();
  const [specialities,setspecialities] = useState([]);
  async function fetchspecialities () {
      const response = await fetch("http://localhost:8000/api/specialities");
      const data = await response.json();
      setspecialities(data);
  }
  // async function fetchdoctor(v){
  //     const response = await fetch();
  // }
  const submit = () => {
    const appointment = {
      name:name,
      whatsapp:whatsapp,
      specialty:specialty,
      doctor:doctor,
      day:day,
      time:time
    }
    console.log(appointment);
  }
  useEffect(function(){
    fetchspecialities();
  });
  return (
    <div>
      <div className='container'>
        <div className='row'>
        <div className="col-lg-4">
        <div className="card rounded-0 mt-3">
          <div className="card-header bg-primary text-white">
            <i className="fa fa-plus-circle"></i> Create New Appointment
          </div>
          <div className="card-body">
            {/* Select Patient */}
            <div className="form-group">
              <label>
                <i className="fa fa-user-circle"></i> Your Name
              </label>
              <input type="text" className="form-control" onKeyUp={(e) => setName(e.target.value)} placeholder={`Add Your Name`} />
            </div>
            <div className="form-group">
              <label>
                <i class="fab fa-whatsapp"></i> What's App
              </label>
              <input type="text" className="form-control" onKeyUp={(e) => setWhatsapp(e.target.value)} placeholder={`Your What's App`} />
            </div>
            {/* Select Specialty */}
            <div className="form-group mt-1">
              <label>
                <i className="fa fa-stethoscope"></i> Select Specialty
              </label>
              <select name="specialty" onChange={(e) => setSpeciality(e.target.value)} className="form-control rounded-0 mt-1">
                <option value="">Select Specialty</option>
                {
                  specialities.map((specialty) => (
                    <option value={specialty.id}>{specialty.title}</option>
                  ))
                }
              </select>
            </div>

            {/* Select Doctor */}
            <div className="form-group mt-3 mb-3">
            {
              doctor ? (
                <div className="form-group mt-3 mb-3">
                  <label><b>Select Doctor</b></label>
                  <select name="doctor" onChange={(e) => setDoctor(e.target.value)} className="form-control rounded-0 mt-1">
                    <option value="">Select Doctor</option>
                    {/* You can replace this static example with actual doctors fetched from API */}
                    <option value="1">Dr. John Doe</option>
                    <option value="2">Dr. Jane Smith</option>
                  </select>
                </div>
              ) : (
                <div className="form-group mt-3 mb-3">
                  <label><font color="red"><b>Select Speciality First</b></font></label>
                </div>
              )
            }
            </div>

            {/* Select Day */}
            <div className="form-group mt-1">
              <label>
                <i className="fa fa-calendar"></i> Select Day
              </label>
              <input type="date" name="day" onChange={(e) => setDay(e.target.value)} className="form-control" />
            </div>

            {/* Select Time Slot */}
            <div className="form-group mt-1">
              <label>
                <i className="fa fa-clock"></i> Time Slot
              </label>
              <input type="time" name="dayslot" onChange={(e) => setTime(e.target.value)} className="form-control" />
            </div>
          </div>

          {/* Submit Button */}
          <div className="card-footer">
            <button className="btn btn-danger btn-sm rounded-0 float-end" onClick={submit}>
              <i className="fa fa-arrow-right"></i> Create Appointment
            </button>
          </div>
        </div>
    </div>
        </div>
      </div>
    </div>
  )
}
