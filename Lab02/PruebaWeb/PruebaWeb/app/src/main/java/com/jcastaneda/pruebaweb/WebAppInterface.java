package com.jcastaneda.pruebaweb;

import android.app.Activity;
import android.content.Context;
import android.media.MediaPlayer;
import android.webkit.JavascriptInterface;
import android.widget.Toast;

public class WebAppInterface {

    Context mContext;
    private Activity activity;
    private final MediaPlayer mp;

    WebAppInterface(Context c){
        mContext = c;
        mp = MediaPlayer.create(c, R.raw.click);
    }

    public void setActivity(Activity p){ activity = p; }

    @JavascriptInterface
    public void showToast(String toast){
        Toast.makeText(mContext, "El resultado de la operación es:" + toast, Toast.LENGTH_LONG).show();
    }

    @JavascriptInterface
    public void showClick() {
        mp.start();
    }

}
