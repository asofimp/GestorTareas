import React, { useEffect, useState } from 'react'

const Widget = () => {

  const [seconds, setSeconds] = useState(25);
  const [minutes, setMinutes] = useState(0);
  const [isActive, setIsActive] = useState(false);

  useEffect(() => {
    let intervalId;

    if (isActive) {
      intervalId = setInterval(() => {
        if (seconds === 0) {
          if (minutes === 0) {
            clearInterval(intervalId);
          } else {
            setMinutes(minutes - 1);
            setSeconds(59);
          }
        } else {
          setSeconds(seconds - 1);
        }
      }, 1000);
    }

    return () => clearInterval(intervalId);
  }, [isActive, minutes, seconds]);

  const toggleTimer = () => {
    setIsActive(!isActive);
  };

  const resetTimer = () => {
    setIsActive(false);
    setMinutes(25);
    setSeconds(0);
    toggleTimer();
  };

  return (
    <div class="shadow p-3 mb-5 font-family-sans-serif" style={{width:"480px", height:"380px", backgroundColor:"#1e1e1e1c", borderRadius:"17%"}}>

        <div className="">
          <h1 className='d-flex justify-content-center align-items-center text-white' style={{fontSize:"125px", marginTop:"4.5rem"}} >
          {minutes.toString().padStart(2, '0')}:{seconds.toString().padStart(2, '0')}
          </h1>
        </div>

        <div className="d-flex justify-content-center align-items-center">

          <button onClick={toggleTimer}  type="button" class="btn">
            
            {isActive ?  
              <svg xmlns="http://www.w3.org/2000/svg" width="30" style={{color:'white', margin:'1rem'}} height="30" fill="currentColor" class="bi bi-pause-fill d-flex justify-content-center align-items-center" viewBox="0 0 16 16">
                <path d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5m5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5"/>
              </svg>
            :
              <svg  xmlns="http://www.w3.org/2000/svg" style={{color:'white', margin:'1rem'}} width="30" height="30" fill="currentColor" class="bi bi-play-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814z"/>
              </svg>
            } 
          </button>

          <button onClick={resetTimer} type="button" class="btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style={{margin:'1rem'}} fill="white" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/>
              <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/>
            </svg>
          </button>
        </div>
    </div>
  )
}

export default Widget