package com.jcastaneda.pruebaweb;

import android.os.Bundle;
import android.os.Handler;
import android.view.View;
import android.webkit.WebView;

import androidx.appcompat.app.ActionBar;
import androidx.appcompat.app.AppCompatActivity;


public class MainActivity extends AppCompatActivity {
    private WebAppInterface wi;
    private boolean mVisible;
    private WebView mContentView;
    private View mControlsView;
    private final Handler mHideHandler = new Handler();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        ActionBar actionBar = getSupportActionBar();
        if(actionBar != null){
            actionBar.show();
        }

        mVisible = true;
        mControlsView = findViewById(R.id.wb);
        mContentView = (WebView) findViewById(R.id.wb);

        mContentView.setVisibility(View.GONE);
    }


    @Override
    protected void onPostCreate(Bundle savedInstanceState) {

        super.onPostCreate(savedInstanceState);

        mContentView.getSettings().setAllowContentAccess(true);
        mContentView.getSettings().setAllowFileAccess(true);
        mContentView.getSettings().setAllowFileAccessFromFileURLs(true);
        mContentView.getSettings().setAllowUniversalAccessFromFileURLs(true);
        mContentView.getSettings().setBlockNetworkLoads(true);
        mContentView.getSettings().setJavaScriptEnabled(true);
        mContentView.getSettings().setDomStorageEnabled(true);
        mContentView.getSettings().setGeolocationEnabled(true);

        wi = (WebAppInterface) new WebAppInterface(this);
        wi.setActivity(this);

        mContentView.addJavascriptInterface(wi,"Android");
        mContentView.setVisibility(View.GONE);
        mContentView.loadUrl("file:///android_asset/index.html");

        mHideHandler.postDelayed(mShowBrowser, 300);

    }

    private final Runnable mShowBrowser = new Runnable() {
        @Override
        public void run() {
                mContentView.setVisibility(View.VISIBLE);
        }
    };
}