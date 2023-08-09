export default function validate(values) {
    let errors = {};
    if (!values.email) {
      errors.email = 'Email address is required';
    } else if (!/\S+@\S+\.\S+/.test(values.email)) {
      errors.email = 'Email address is invalid';
    }
    if (!values.FName) {
        errors.FName = 'First name is required';
      } else if (!/^[A-Öa-ö]+$/.test(values.FName)) {
        errors.FName = 'Enter alphabets only';
      }

      if (!values.LName) {
        errors.LName = 'Last name is required';
      } else if (!/^[A-Öa-ö]+$/.test(values.LName)) {
        errors.LName = 'Enter alphabets only';
      }

      if (!values.subject) {
        errors.subject = 'subject text is required';
      } else if (!/^[A-Öa-ö0-9]+$/.test(values.subject)) {
        errors.subject = 'Enter alphabets & numerals only';
      }


    return errors;

  };

  

 
