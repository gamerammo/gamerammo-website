import React from 'react';
import DocumentTitle from 'react-document-title';
import Loading from '../../components/loading';
import Header from '../../components/header';
import Footer from '../../components/footer';
import AboveFold from './abovefold';
import About from './about';
import Social from './social';
import Clutch from './clutch';
import TestAlpha from './testalpha';
import Token from './token';
import MailingList from './mailinglist';
import Recruitment from './recruitment';
import '../../assets/styles';

class Home extends React.PureComponent {
  render() {
    return (
      <div>
        <Loading />
        <Header key="header" />
        <AboveFold key="abovefold" />
        <hr className="divider-w" />
        <About key="about" />
        <hr className="divider-w" />
        <Social key="social" />
        <hr className="divider-w" />
        <Clutch key="clutch" />
        <hr className="divider-w" />
        <TestAlpha key="testalpha" />
        <hr className="divider-w" />
        <Token key="token" />
        <hr className="divider-w" />
        <MailingList key="mailinglist" />
        <hr className="divider-w" />
        <Recruitment key="recruitment" />
        <DocumentTitle title="Gamer Ammo - Gaming is a profession" />
        <Footer key="footer" />
      </div>
    );
  }
}
export default Home;
