import React, {useEffect, useState} from 'react';
import {Navigation} from './navigation/navigation';
import {NavLink} from 'react-router-dom';
import style from './header.module.css';

export const Header = (props) => {
    const [lang, setLang] = useState('');

    function getLang(language) {
        fetch('/api/languages/'+language)
            .then(response => response.json())
            .then(actualData => setLang(actualData));
        console.log(lang);
    }

    return (
        <header>
            <NavLink to='/'>
                <h2 className={`${style.logo}`}>Logo</h2>
            </NavLink>
            <div>
                {/*<button onClick={getLang('english')}>EN</button>*/}
                {/*<button onClick={getLang('russian')}>RU</button>*/}
                {/*<button onClick={getLang('deutsch')}>DE</button>*/}
            </div>
            <Navigation/>
        </header>
    );
};
