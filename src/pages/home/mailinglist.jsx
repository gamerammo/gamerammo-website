import React from 'react';

export default function MailingList() {
  return (
    <div className="module-small bg-dark">
      <div className="container">
        <div className="row">
          <div className="col-sm-6 col-md-6 col-lg-4 col-lg-offset-2">
            <div className="callout-text font-alt">
              <h3 className="callout-title" style={{ color: '#F9A12C' }}>
                Link into our Chain
              </h3>
              <p style={{ color: '#fff' }}>
                Stay up-to-date on the Moment of Tokenization for Gamerammo.
              </p>
            </div>
          </div>
          <div className="col-sm-6 col-md-6 col-lg-4">
            <form action="/tge/">
              <div className="text-center">
                <button
                  className="btn btn-block btn-round btn-d"
                  id="cfsubmit"
                  type="submit"
                  style={{ backgroundColor: '#CA4C0C', marginTop: '2.5%' }}
                >
                  Reload
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  );
}
