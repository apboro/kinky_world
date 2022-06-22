import React from 'react';
import { Route, Routes } from 'react-router-dom';
import { Header } from './common/header';
import { AboutUsPage } from './pages/aboutUsPage';
import { PartiesPage } from './pages/partiesPage';
import { ForumPage } from './pages/forumPage';
import { BlogsPage } from './pages/blogsPage';
import { MainPage } from './pages/mainPage';
import { DatingPage } from './pages/datingPage';
import { ShopsPage } from './pages/shopsPage';
import { KinkbnbPage } from './pages/kinkbnbPage';

export const App = () => {
	return (
		<>
			{<Header />}
			<Routes>
				<Route path='/' element={<MainPage />} />
				<Route path='/about' element={<AboutUsPage />} />
				<Route path='/kinkbnb' element={<KinkbnbPage />} />
				<Route path='/dating' element={<DatingPage />} />
				<Route path='/parties' element={<PartiesPage />} />
				<Route path='/forum' element={<ForumPage />} />
				<Route path='/blogs' element={<BlogsPage />} />
				<Route path='/shops' element={<ShopsPage />} />
			</Routes>

		</>
	);
};
