import React from 'react'
import { useForm } from 'react-hook-form'
import styled from 'styled-components';

const Form = () => {
  
  const { register, formState:{errors} ,handleSubmit} = useForm();
  
  const Actividad = (data)=>{
    console.log(data)
  }


  return (
    <>
      <Over>
       <form onSubmit={handleSubmit(Actividad)}>
          <div className="">
            <label>Titulo</label>
            <input type="text" {...register('titulo',{
              required:true,
              maxLength:10,
            })}/>
            {errors.titulo?.type === 'required' && <p>El campo titulo es requerido</p>}
          </div>
          <div className="">
            <label>Descripción</label>
            <textarea type="text" {...register('descripcion')}/>
          </div>
          <div className="">
            <label>Repetir</label>
            <select {...register('repetir')}>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
          <input type="submit" value="Enviar" />
        </form>
      </Over>
    </>
  )
}

export default Form

const Over = styled.div`
  width: 100vw;
  height: 100vh;
  positio: fixed;
  top: 0;
  left: 0;
  background: rgba( 0, 0, 0, 0.5);
`;



