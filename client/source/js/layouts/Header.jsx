import React, { Component } from 'react';
import { withWindow } from 'react-window-decorators';
import { withRouter } from 'react-router-dom';
import { injectIntl } from 'react-intl';

export default
@withRouter
@withWindow
@injectIntl
class Header extends Component {
  render() {
    const { intl } = this.props;

    return (
      <header id="top-header" className="">
        <div className="container row" id="header">
          <div className="col-5">
            <a href="https://www.geschenkparadies.ch" title="geschenkparadies.ch">
              <img
                className="js-sticky-header-fixed header-logo"
                src="https://www.geschenkparadies.ch/images/logos/svg/geschenkparadies.ch.svg"
                alt="geschenkparadies.ch"
              />
            </a>
          </div>
          <div className="col-6 js-header-search header-search">
            <form action="/s" className="search-form js-search-form">
              <input
                name="query" id="sel-search-form-input"
                className="form-control search-form-input light-border js-search-form-input placeholder"
                maxLength="30"
                autoComplete="off"
                placeholder={ intl.formatMessage({ id: 'gift_search_placeholder' }) }
              />
                <button className="btn btn-red search-button">
                  <div className="icon-search"/>
                </button>
                <div id="search-panel"/>
            </form>
          </div>
          <div id="header-cart-link">
            <div id="header-cart-icon">
              <a href="//www.geschenkparadies.ch/cart/show">
                <div className="icon-cart" rel="Warenkorb">
                  <span className="header-cart-num cart-num-loading-bgr no-background-image">0</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </header>
    );
  }
}
