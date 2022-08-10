import React, {useEffect, useState} from 'react';
import {Navigation} from './navigation/navigation';
import {NavLink} from 'react-router-dom';
import style from './header.module.css';

export const Header = (props) => {
    const [lang_ru, setLang_RU] = useState('');

    function getRussian() {
        fetch('https://kinkyapi.alevi.space/api/languages')
            .then(response => response.json())
            .then(actualData => setLang_RU(actualData));
        console.log(lang_ru);
    }

    return (
        <header>
            <NavLink to='/'>
                <h2 className={`${style.logo}`}>Logo</h2>
            </NavLink>
            <div>
                <button onClick={getRussian}>EN</button>
                <button onClick={getRussian}>RU</button>
                <button onClick={getRussian}>DE</button>
            </div>
            <Navigation/>
        </header>
    );
};
