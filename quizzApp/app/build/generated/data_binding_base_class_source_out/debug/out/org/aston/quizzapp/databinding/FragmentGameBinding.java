// Generated by data binding compiler. Do not edit!
package org.aston.quizzapp.databinding;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.TextView;
import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.constraintlayout.widget.ConstraintLayout;
import androidx.databinding.Bindable;
import androidx.databinding.DataBindingUtil;
import androidx.databinding.ViewDataBinding;
import java.lang.Deprecated;
import java.lang.Object;
import org.aston.quizzapp.R;
import org.aston.quizzapp.viewmodel.GameViewModel;

public abstract class FragmentGameBinding extends ViewDataBinding {
  @NonNull
  public final Button btnJouer;

  @NonNull
  public final ConstraintLayout gameFragment;

  @NonNull
  public final TextView gameTextView;

  @Bindable
  protected GameViewModel mGameViewModel;

  protected FragmentGameBinding(Object _bindingComponent, View _root, int _localFieldCount,
      Button btnJouer, ConstraintLayout gameFragment, TextView gameTextView) {
    super(_bindingComponent, _root, _localFieldCount);
    this.btnJouer = btnJouer;
    this.gameFragment = gameFragment;
    this.gameTextView = gameTextView;
  }

  public abstract void setGameViewModel(@Nullable GameViewModel gameViewModel);

  @Nullable
  public GameViewModel getGameViewModel() {
    return mGameViewModel;
  }

  @NonNull
  public static FragmentGameBinding inflate(@NonNull LayoutInflater inflater,
      @Nullable ViewGroup root, boolean attachToRoot) {
    return inflate(inflater, root, attachToRoot, DataBindingUtil.getDefaultComponent());
  }

  /**
   * This method receives DataBindingComponent instance as type Object instead of
   * type DataBindingComponent to avoid causing too many compilation errors if
   * compilation fails for another reason.
   * https://issuetracker.google.com/issues/116541301
   * @Deprecated Use DataBindingUtil.inflate(inflater, R.layout.fragment_game, root, attachToRoot, component)
   */
  @NonNull
  @Deprecated
  public static FragmentGameBinding inflate(@NonNull LayoutInflater inflater,
      @Nullable ViewGroup root, boolean attachToRoot, @Nullable Object component) {
    return ViewDataBinding.<FragmentGameBinding>inflateInternal(inflater, R.layout.fragment_game, root, attachToRoot, component);
  }

  @NonNull
  public static FragmentGameBinding inflate(@NonNull LayoutInflater inflater) {
    return inflate(inflater, DataBindingUtil.getDefaultComponent());
  }

  /**
   * This method receives DataBindingComponent instance as type Object instead of
   * type DataBindingComponent to avoid causing too many compilation errors if
   * compilation fails for another reason.
   * https://issuetracker.google.com/issues/116541301
   * @Deprecated Use DataBindingUtil.inflate(inflater, R.layout.fragment_game, null, false, component)
   */
  @NonNull
  @Deprecated
  public static FragmentGameBinding inflate(@NonNull LayoutInflater inflater,
      @Nullable Object component) {
    return ViewDataBinding.<FragmentGameBinding>inflateInternal(inflater, R.layout.fragment_game, null, false, component);
  }

  public static FragmentGameBinding bind(@NonNull View view) {
    return bind(view, DataBindingUtil.getDefaultComponent());
  }

  /**
   * This method receives DataBindingComponent instance as type Object instead of
   * type DataBindingComponent to avoid causing too many compilation errors if
   * compilation fails for another reason.
   * https://issuetracker.google.com/issues/116541301
   * @Deprecated Use DataBindingUtil.bind(view, component)
   */
  @Deprecated
  public static FragmentGameBinding bind(@NonNull View view, @Nullable Object component) {
    return (FragmentGameBinding)bind(component, view, R.layout.fragment_game);
  }
}