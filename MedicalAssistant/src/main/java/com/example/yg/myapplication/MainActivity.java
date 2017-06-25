package com.example.yg.myapplication;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageButton;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    private ImageButton nursecomeBtn;
    private ImageButton massageBtn;
    private ImageButton medicien2homeBtn;
    private ImageButton medicalexamBtn;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        Intent intent = getIntent();
        String username = intent.getStringExtra("username");

        Toast.makeText(this, "welcome "+username, Toast.LENGTH_LONG).show();

        nursecomeBtn = (ImageButton)findViewById(R.id.ibNursecome);
        massageBtn = (ImageButton)findViewById(R.id.ibMassage);
        medicien2homeBtn = (ImageButton)findViewById(R.id.ibMedicien2home);
        medicalexamBtn = (ImageButton)findViewById(R.id.ibMedicalexam);

        nursecomeBtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(MainActivity.this, NurseCome.class);
                startActivity(intent);
            }
        });
    }
}
