import React from 'react';
import useForm from "./useForm";
import validate from './FormValidationRules';

const Form = () => {
    const { values, handleChange, handleSubmit, errors } = useForm(submitData, validate);

    function submitData() {
        console.log(values);
      }
  return (
    <div className="section is-fullheight">
      <div className="container">
        <div className="column is-4 is-offset-4">
          <div className="box">
            <form onSubmit={handleSubmit} noValidate>
                
                <div className="field">
                    <label className="label">First Name</label>
                    <div className="control">
                        <input className={`input ${errors.FName && 'is-danger'}`} type="text" name="FName" placeholder="First Name" onChange={handleChange} value={values.FName || ''} required />
                        {errors.FName && (
                        <p className="help is-danger">{errors.FName}</p>
                        )}   
                    </div>
                </div>

                <div className="field">
                    <label className="label">Last Name</label>
                    <div className="control">
                        <input className={`input ${errors.LName && 'is-danger'}`}  type="text" name="LName" placeholder="Last Name" onChange={handleChange} value={values.LName || ''} required />   
                        {errors.LName && (
                        <p className="help is-danger">{errors.LName}</p>
                        )}
                    </div>
                </div>

              <div className="field">
                    <label className="label">Email Address</label>
                <div className="control">
                    <input className={`input ${errors.email && 'is-danger'}`} type="email" name="email"  placeholder="Email" onChange={handleChange} value={values.email || ''} required />
                    {errors.email && (
                    <p className="help is-danger">{errors.email}</p>
                    )}
                </div>
              </div>

              <div className="select" name="sCountry" onChange={handleChange} value={values.sCountry}>
                <select>
                    <option>Finland</option>
                    <option>Australia</option>
                    <option>New Zealand</option>
                    <option>Old Zealand</option>
                    <option>Kenguru</option>
                </select>
              </div>

              <div className="field">
                <label className="label">Subject</label>
                <div className="control">
                    <textarea className={`textarea ${errors.subject && 'is-danger'}`} type="text" name="subject" minLength="10" maxLength="500" placeholder="Write here" onChange={handleChange} value={values.subject || ''} required />
                    {errors.subject && (
                    <p className="help is-danger">{errors.subject}</p>
                    )}
                </div>
              </div>

              <button type="submit" className="button is-block is-info is-fullwidth">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  );
};

export default Form;