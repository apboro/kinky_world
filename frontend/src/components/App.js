import React from 'react';
import { Route, Routes } from 'react-router-dom';
import { Header } from './common/header';
import { Footer } from './common/footer';
import { AboutUsPage } from './pages/aboutUsPage';
import { PartiesPage } from './pages/partiesPage';
import { ForumPage } from './pages/forumPage';
import { BlogsPage } from './pages/blogsPage';
import { MainPage } from './pages/mainPage';
import { DatingPage } from './pages/datingPage';
import { ShopsPage } from './pages/shopsPage';
import { KinkbnbPage } from './pages/kinkbnbPage';
import { ClubsPage } from './pages/clubsPage';
import { AccountPage } from './pages/accountPage';
import { MyKinkBNBPage } from './pages/accountPage/myKinkBNBPage';
import { MyPartiesPage } from './pages/accountPage/myPartiesPage';
import { MyDatesPage } from './pages/accountPage/myDatesPage';

export const App = () => {
	return (
		<>
			<Header />

			<Routes>
				<Route path='/' element={<MainPage />} />
				<Route path='/dating' element={<DatingPage />} />
				<Route path='/kinkbnb' element={<KinkbnbPage />} />
				<Route path='/parties' element={<PartiesPage />} />
				<Route path='/forum' element={<ForumPage />} />
				<Route path='/blogs' element={<BlogsPage />} />
				<Route path='/shops' element={<ShopsPage />} />
				<Route path='/clubs' element={<ClubsPage />} />
				<Route path='/about' element={<AboutUsPage />} />
				<Route path='/account/' element={<AccountPage />} />
				<Route path='/account/my_kink_bnb' element={<MyKinkBNBPage />} />
				<Route path='/account/my_parties' element={<MyPartiesPage />} />
				<Route path='/account/my_dates' element={<MyDatesPage />} />
			</Routes>

			<Footer />
		</>
	);
};
