import React, {useEffect, useState} from 'react';
import style from './loginForm.module.css';
import axios from 'axios';


export const LoginForm = (props) => {
    const emailRef = React.useRef();
    const passwordRef = React.useRef();
    const [dataLogin, setDataLogin] = useState();
    const [login, setLogin] = useState(false);

    function handleLoginForm(event) {
        event.preventDefault();

        const dataLogin = {
            email: emailRef.current.value,
            password: passwordRef.current.value,
        };
        axios.get('/sanctum/csrf-cookie')
        .then(
        axios.post('/api/login', dataLogin)
            .then(function (response) {
                console.log(response);
            }).then(setDataLogin('YOU ARE LOGGED IN!!!'))
            .catch(function (error) {
                console.log(error);
            }))
    }

    function logout() {
        axios.post('/api/logout')
            .then(function (response) {
                console.log(response);
            }).then(setDataLogin('YOU ARE LOGGED OUT!!!'))
            .catch(function (error) {
                console.log(error);
            })
    }


    return (
        <div className={`${style.container}`}>
            <form onSubmit={handleLoginForm} className={`${style.form}`}>
                <span>Login Form</span>

                <span>Email:</span>
                <input ref={emailRef} placeholder='E-mail' type='Email'></input>
                <span>Password:</span>
                <input ref={passwordRef} placeholder='password' type='password'></input>
                <button type='submit'>Login</button>
                <button type='button' onClick={logout}>Logout</button>
                {dataLogin}

            </form>
        </div>
    );
};
