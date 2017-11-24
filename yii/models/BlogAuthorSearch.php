<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BlogAuthor;

/**
 * BlogAuthorSearch represents the model behind the search form about `app\models\BlogAuthor`.
 */
class BlogAuthorSearch extends BlogAuthor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_autrhor'], 'integer'],
            [['display_name', 'first_name', 'last_name'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = BlogAuthor::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_autrhor' => $this->id_autrhor,
        ]);

        $query->andFilterWhere(['like', 'display_name', $this->display_name])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name]);

        return $dataProvider;
    }
}
