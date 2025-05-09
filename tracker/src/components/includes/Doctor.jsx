import React from 'react'

export default function Doctor(props) {
  return (
    <div>
        <div>
          <div className="card h-100 text-center">
            <div className="card-body">
              <img
                src={`http://localhost:8000/storage/doctors/`+props.doctor.picture}
                alt="Dr. Sarah Khan"
                className="rounded-circle img-fluid mb-3"
                style={{ width: '150px', height: '150px', objectFit: 'cover' }}
              />
              <h5 className="card-title">{props.doctor.name}</h5>
              <p className="card-text">{props.doctor.email}</p>
              <p className="card-text">{props.doctor.whatsapp} | wjahsdj</p>
            </div>
          </div>
        </div>
    </div>
  )
}
